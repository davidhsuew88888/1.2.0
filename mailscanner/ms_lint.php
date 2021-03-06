<?php

/*
 * MailWatch for MailScanner
 * Copyright (C) 2003-2011  Steve Freegard (steve@freegard.name)
 * Copyright (C) 2011  Garrod Alwood (garrod.alwood@lorodoes.com)
 * Copyright (C) 2014-2016  MailWatch Team (https://github.com/orgs/mailwatch/teams/team-stable)
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 * In addition, as a special exception, the copyright holder gives permission to link the code of this program with
 * those files in the PEAR library that are licensed under the PHP License (or with modified versions of those files
 * that use the same license as those files), and distribute linked combinations including the two.
 * You must obey the GNU General Public License in all respects for all of the code used other than those files in the
 * PEAR library that are licensed under the PHP License. If you modify this program, you may extend this exception to
 * your version of the program, but you are not obligated to do so.
 * If you do not wish to do so, delete this exception statement from your version.
 *
 * As a special exception, you have permission to link this program with the JpGraph library and distribute executables,
 * as long as you follow the requirements of the GNU GPL in regard to all of the software in the executable aside from
 * JpGraph.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write to the Free
 * Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

require_once(__DIR__ . '/functions.php');

session_start();
require(__DIR__ . '/login.function.php');

html_start(__('mailscannerlint28'), 0, false, false);
echo '<table class="mail" cellspacing="1" width="100%">' . "\n";
echo ' <tr>' . "\n";
echo '  <th colspan="2">MailScanner Lint</th>' . "\n";
echo ' </tr>' . "\n";

if (!defined('MS_EXECUTABLE_PATH')) {
    echo '<tr>
    <td colspan="2">Please set MS_EXECUTABLE_PATH in conf.php to enable this feature</td>
    </tr>';
} else {
    if (!$fp = popen('sudo ' . MS_EXECUTABLE_PATH . ' --lint 2>&1', 'r')) {
        die(__('diepipe28'));
    } else {
        audit_log('Run MailScanner lint');
    }

    // Start timer
    $start = get_microtime();
    $last = false;
    while ($line = fgets($fp, 2096)) {
        $line = preg_replace("/\n/i", "", $line);
        if ($line !== "" && $line !== " ") {
            $timer = get_microtime();
            $linet = $timer - $start;
            if (!$last) {
                $last = $linet;
            }

            echo '<!-- Timer: ' . $timer . ', Line Start: ' . $linet . ' -->' . "\n";
            echo '    <tr>' . "\n";
            echo '     <td>' . $line . '</td>' . "\n";
            $thisone = $linet - $last;
            $last = $linet;
            if ($thisone >= 2) {
                echo '     <td class="lint_5">' . round($thisone, 5) . '</td>' . "\n";
            } elseif ($thisone >= 1.5) {
                echo '     <td class="lint_4">' . round($thisone, 5) . '</td>' . "\n";
            } elseif ($thisone >= 1) {
                echo '     <td class="lint_3">' . round($thisone, 5) . '</td>' . "\n";
            } elseif ($thisone >= 0.5) {
                echo '     <td class="lint_2">' . round($thisone, 5) . '</td>' . "\n";
            } elseif ($thisone < 0.5) {
                echo '     <td class="lint_1">' . round($thisone, 5) . '</td>' . "\n";
            }
            echo '    </tr>' . "\n";
        }
    }
    pclose($fp);
    echo '   <tr>' . "\n";
    echo '    <td><b>Finish - Total Time</b></td>' . "\n";
    echo '    <td align="right"><b>' . round(get_microtime() - $start, 5) . '</b></td>' . "\n";
    echo '   </tr>' . "\n";
}
echo '</table>' . "\n";
// Add the footer
html_end();
// close the connection to the Database
dbclose();
