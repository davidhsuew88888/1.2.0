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

/* languages/pt_br.php */
/* v0.2.9 */

return array(
    // 01-login.php
    'username' => 'Usu&aacute;rio',
    'password' => 'Senha',
    'mwloginpage01' => 'MailWatch Login Page',
    'mwlogin01' => 'MailWatch Login',
    'badup01' => 'Bad Username or Password',
    'emptypassword01' => 'Password cannot be empty',
    'errorund01' => 'An undefined error occurred',
    'login01' => 'Login',

    // 03-funtions.php
    'jumpmessage03' => 'Carregar a mensagem:',
    'cuser03' => 'Usu&aacute;rio',
    'cst03' => 'Hora do Sistema',
    'colorcodes03' => 'C&oacute;digo de Cores',
    'badcontentinfected03' => 'Conte&uacute;do Bloq./Infectado',
    'whitelisted03' => 'Lista Branca',
    'blacklisted03' => 'Lista Negra',
    'notverified03' => 'N&atilde;o Verificado',
    'mailscanner03' => 'Mailscanner:',
    'none03' => 'None',
    'yes03' => 'YES',
    'no03' => 'NO',
    'status03' => 'Status',
    'message03' => 'Message',
    'tries03' => 'Tries',
    'last03' => 'Last',
    'loadaverage03' => 'Load Average:',
    'mailqueue03' => 'Mail Queues',
    'inbound03' => 'Inbound:',
    'outbound03' => 'Oubound:',
    'clean03' => 'Limpo:',
    'topvirus03' => 'Top Virus:',
    'freedspace03' => 'Espaço em Disco Livre',
    'todaystotals03' => 'Totais do Dia',
    'processed03' => 'Processados:',
    'cleans03' => 'Limpos:',
    'viruses03' => 'Virus:',
    'blockedfiles03' => 'Arquivos Bloqueados:',
    'others03' => 'Outros:',
    'spam03' => 'Spam:',
    'spam103' => 'Spam',
    'hscospam03' => 'Spam Pont. Alta:',
    'hscomcp03' => 'MCP Pont. Alta:',
    'recentmessages03' => 'Mensagens Recentes',
    'lists03' => 'Listas',
    'quarantine03' => 'Quarantena',
    'datetime03' => 'Data/Hora',
    'from03' => 'De',
    'to03' => 'Para',
    'size03' => 'Tamanho',
    'subject03' => 'Assunto',
    'sascore03' => 'Pontos SA',
    'mcpscore03' => 'Pontos MCP',
    'found03' => 'encontrado',
    'highspam03' => 'High Spam',
    'mcp03' => 'MCP',
    'highmcp03' => 'High MCP',
    'reports03' => 'Relatórios',
    'toolslinks03' => 'Ferramentas/Links',
    'softwareversions03' => 'Versões dos Softwares',
    'documentation03' => 'Documentação',
    'logout03' => 'Sair',
    'pggen03' => 'Página criada em',
    'seconds03' => 'segundos',
    'disppage03' => 'Mostando página',
    'of03' => 'de',
    'records03' => 'Registros de',
    'to0203' => 'até',
    'score03' => 'Pontuação',
    'matrule03' => 'Regra Equivalente',
    'description03' => 'Descrição',
    'footer03' => 'MailWatch for MailScanner v',
    'mailwatchtitle03' => 'MailWatch for Mailscanner',
    'php703' => 'MailWatch needs the (deprecated) MySQL extension to work: PHP7 has removed this extension and this software will not work on it.',
    'radiospam203' => 'S',
    'radioham03' => 'H',
    'radioforget03' => 'F',
    'radiorelease03' => 'R',
    'clear03' => 'Clear</a> all',
    'spam203' => 'S</b> = Spam',
    'ham03' => 'H</b> = Ham',
    'forget03' => 'F</b> = Forget',
    'release03' => 'R</b> = Released',
    'learn03' => 'Learn',
    'ops03' => 'Options',
    'or03' => 'or',
    'mwfilterreport03' => 'MailWatch Filter Report:',
    'mwforms03' => 'MailWatch for Mailscanner - ',
    'dieerror03' => 'Error:',
    'dievirus03' => 'You are running MailWatch in distributed mode therefore MailWatch cannot read your MailScanner configuration files to acertain your primary virus scanner - please edit functions.php and manually set the VIRUS_REGEX constant for your primary scanner.',
    'diescanner03' => 'Unable to select a regular expression for your primary virus scanner ($scanner) - please see the examples in functions.php to create one.',
    'diedbconn103' => 'Could not connect to database:',
    'diedbconn203' => 'Could not select db:',
    'diedbquery03' => 'Error executing query:',
    'dieruleset03' => 'Cannot open ruleset file',
    'dienomsconf03' => 'Cannot open MailScanner configuration file',
    'dienoconfigval103' => 'Cannot find configuration value:',
    'dienoconfigval203' => 'in',
    'ldpaauth103' => 'Could not connect to',
    'ldpaauth203' => 'Could not search',
    'ldpaauth303' => 'Could not get entries',
    'ldapgetconfvar103' => 'Error: could not connect to LDAP directory on:',
    'ldapgetconfvar203' => 'Error: unable to bind to LDAP directory',
    'ldapgetconfvar303' => 'Error: cannot find configuration value',
    'ldapgetconfvar403' => 'in LDAP directory.',
    'dietranslateetoi03' => 'Cannot open MailScanner ConfigDefs file:',
    'diequarantine103' => 'Message ID',
    'diequarantine203' => 'not found.',
    'diequarantine303' => 'Cannot open quarantine dir:',
    'diereadruleset03' => 'Cannot open MailScanner ruleset file',
    'hostfailed03' => '(Hostname lookup failed)',
    
    // 04-detail.php
    'receivedon04' => 'Recebido em:',
    'receivedby04' => 'Recebido por:',
    'receivedfrom04' => 'Recebido de:',
    'receivedvia04' => 'Recebido Via:',
    'msgheaders04' => 'Cabe&ccedil;alhos:',
    'from04' => 'De:',
    'to04' => 'Para:',
    'size04' => 'Tamanho:',
    'subject04' => 'Assunto:',
    'hdrantivirus04' => 'Anti-Virus/Prote&ccedil;&atilde;o de Conte&uacute;do Perigoso',
    'blkfile04' => 'Arquivo Bloqueado:',
    'otherinfec04' => 'Outra Infec&ccedil;&atilde;o:',
    'hscospam04' => 'SPAM Pont. Alta:',
    'listedrbl04' => 'Listado em RBL:',
    'spamwl04' => 'Lista Branca de SPAM:',
    'spambl04' => 'Lista Negra de SPAM:',
    'saautolearn04' => 'Autoaprendizando do Spamassassin:',
    'sascore04' => 'Pontua&ccedil;&atilde;o do Spamassassin:',
    'spamrep04' => 'Relat&oacute;rio de Spam:',
    'hdrmcp04' => 'Prote&ccedil;&atilde;o de Conte&uacute;do de Mensagens (MCP)',
    'highscomcp04' => 'MCP Pont. Alta:',
    'mcpwl04' => 'Lista Branca de MCP:',
    'mcpbl04' => 'Lista Negra de MCP:',
    'mcpscore04' => 'Pontua&ccedil;&atilde;o do MCP:',
    'mcprep04' => 'Relat&oacute;rio MCP:',
    'ipaddress04' => 'Endere&ccedil;o IP',
    'country04' => 'Pa&iacute;s',
    'all04' => 'Tudo',
    'addwl04' => 'Adicionar na Lista Branca',
    'addbl04' => 'Adicionar na Lista Negra',
    'release04' => 'Liberar',
    'delete04' => 'Excluir',
    'salearn04' => 'Ensinar SA',
    'file04' => 'Arquivo',
    'type04' => 'Tipo',
    'path04' => 'Caminho',
    'dang04' => 'Perigoso',
    'altrecip04' => 'Destinat&aacute;rio(s) Alternativo(s)',
    'submit04' => 'Enviar',
    'actions04' => 'A&ccedil;&atilde;o',
    'quarcmdres04' => 'Resultado da A&ccedil;&atilde;o da Quarentena',
    'resultmsg04' => 'Resultados',
    'id04' => 'ID:',
    'virus04' => 'Virus:',
    'spam04' => 'Spam:',
    'spamassassinspam04' => 'SpamAssassin Spam:',
    'quarantine04' => 'Quarentena',
    'messdetail04' => 'Message Detail',
    'dieid04' => 'Message ID',
    'dienotfound04' => 'not found!',
    'asham04' => 'As Ham',
    'aspam04' => 'As Spam',
    'forget04' => 'Forget',
    'spamreport04' => 'As Spam+Report',
    'spamrevoke04' => 'As Ham+Revoke',
    'geoipfailed04' => '(GeoIP lookup failed)',
    'reversefailed04' => '(Reverse Lookup Failed)',
    'hostname04' => 'Hostname',
    
    // 05-status.php
    'recentmsg05' => 'Mensagens Recentes',
    'last05' => '&Uacute;ltimas',
    'messages05' => 'Mensagens',
    'refevery05' => 'Recarregando a cada',
    'seconds05' => 'segundos',

    // 06-viewmail.php
    'msgviewer06' => 'Visualiza&ccedil;&atilde;o da Mensagem',
    'releasemsg06' => 'Liberar esta mensagem',
    'deletemsg06' => 'Excluir esta mensagem',
    'actions06' => 'A&ccedil;&otilde;es:',
    'date06' => 'Data:',
    'from06' => 'De:',
    'to06' => 'Para:',
    'subject06' => 'Assunto:',
    'nomessid06' => 'No input Message ID',
    'mess06' => 'Message',
    'notfound06' => 'not found',
    'error06' => 'Error:',
    'errornfd06' => 'Error: file not found',
    'mymetype06' => 'MIME Type:',
    
    // 07-lists.php
    'addwlbl07' => 'Adicionar à Lista Branca/Lista Negra',
    'from07' => 'De',
    'to07' => 'Para',
    'list07' => 'Lista',
    'action07' => 'Ação',
    'wl07' => 'Lista Branca',
    'bl07' => 'Lista Negra',
    'reset07' => 'Limpa',
    'add07' => 'Adiciona',
    'delete07' => 'Excluir',
    'wblists07' => 'Whitelist/Blacklist',

    // 08-quarantine.php
    'folder08' => 'Pasta',
    'folder_0208' => 'Pasta',
    'items08' => 'itens',
    'qviewer08' => 'Quarantine Viewer',
    'dienodir08' => 'No quarantine directories found',

    // 09-filter.inc.php
    'activefilters09' => 'Filtros Ativos',
    'addfilter09' => 'Adicionar Filtro',
    'loadsavef09' => 'Carregar/Salvar Filtro',
    'tosetdate09' => 'Para filtro por data utilize o formato YYYY-mm-dd',
    'oldrecord09' => 'Oldest record:',
    'newrecord09' => 'Newest record:',
    'messagecount09' => 'Message count:',
    'stats09' => 'Statistics (Filtered)',
    'add09' => 'Add',
    'load09' => 'Load',
    'save09' => 'Save',
    'delete09' => 'Delete',
    'none09' => 'Nenhum',
    'equal09' => 'is equal to',
    'notequal09' => 'is not equal to',
    'greater09' => 'is greater than',
    'greaterequal09' => 'is greater than or equal to',
    'less09' => 'is less than',
    'lessequal09' => 'is less than or equal to',
    'like09' => 'contains',
    'notlike09' => 'does not contain',
    'regexp09' => 'matches the regular expression',
    'notregexp09' => 'does not match the regular expression',
    'isnull09' => 'is null',
    'isnotnull09' => 'is not null',
    'date09' => 'Date',
    'headers09' => 'Headers',
    'id09' => 'Message ID',
    'size09' => 'Size (bytes)',
    'fromaddress09' => 'From',
    'fromdomain09' => 'From Domain',
    'toaddress09' => 'To',
    'todomain09' => 'To Domain',
    'subject09' => 'Subject',
    'clientip09' => 'Received from (IP Address)',
    'isspam09' => 'is Spam (>0 = TRUE)',
    'ishighspam09' => 'is High Scoring Spam (>0 = TRUE)',
    'issaspam09' => 'is Spam according to SpamAssassin (>0 = TRUE)',
    'isrblspam09' => 'is Listed in one or more RBL\'s (>0 = TRUE)',
    'spamwhitelisted09' => 'is Whitelisted (>0 = TRUE)',
    'spamblacklisted09' => 'is Blacklisted (>0 = TRUE)',
    'sascore09' => 'SpamAssassin Score',
    'spamreport09' => 'Spam Report',
    'ismcp09' => 'is MCP (>0 = TRUE)',
    'ishighmcp09' => 'is High Scoring MCP (>0 = TRUE)',
    'issamcp09' => 'is MCP according to SpamAssassin (>0 = TRUE)',
    'mcpwhitelisted09' => 'is MCP Whitelisted (>0 = TRUE)',
    'mcpblacklisted09' => 'is MCP Blacklisted (>0 = TRUE)',
    'mcpscore09' => 'MCP Score',
    'mcpreport09' => 'MCP Report',
    'virusinfected09' => 'contained a Virus (>0 = TRUE)',
    'nameinfected09' => 'contained an Unacceptable Attachment (>0 = TRUE)',
    'otherinfected09' => 'contained other infections (>0 = TRUE)',
    'report09' => 'Virus Report',
    'hostname09' => 'MailScanner Hostname',
    'remove09' => 'Remove',
    'reports09' => 'Reports',
    
    // 10-other.php
    'tools10' => 'Ferramentas',
    'toolslinks10' => 'Tools and Links',
    'usermgnt10' => 'Gerenciamento de Usuários',
    'avsophosstatus10' => 'Sophos Status',
    'avfsecurestatus10' => 'F-Secure Status',
    'avclamavstatus10' => 'ClamAV Status',
    'avmcafeestatus10' => 'McAfee Status',
    'avfprotstatus10' => 'F-Prot Status',
    'mysqldatabasestatus10' => 'MySQL Database Status',
    'viewconfms10' => 'Ver configurações do MailScanner',
    'editmsrules10' => 'Editar Regras do MailScanner',
    'spamassassinbayesdatabaseinfo10' => 'SpamAssassin Bayes Database Info',
    'updatesadesc10' => 'Atualiar as descrições do SpamAssassin',
    'updatemcpdesc10' => 'Atualiar as descrições do MCP',
    'updategeoip10' => 'Atualizar Database GeoIP',
    'links10' => 'Links',

    // 11-sf_versions.php
    'softver11' => 'Versões dos Software',
    'nodbdown11' => 'Nenhum database baixado',
    'version11' => 'Versão',

    // 12-user_manager.php
    'usermgnt12' => 'Gerenciamento de Usuários',
    'username12' => 'Usuário',
    'fullname12' => 'Nome Completo',
    'type12' => 'Tipo',
    'spamcheck12' => 'Verificar Spam',
    'spamscore12' => 'Pontuação Spam',
    'spamhscore12' => 'Pontuação Alta Spam',
    'action12' => 'Ações',
    'edit12' => 'Editar',
    'delete12' => 'Excluir',
    'filters12' => 'Filtros',
    'newuser12' => 'Novo Usuário',
    'forallusers12' => 'Para usuários que não são Administradores deve-se usar o email como usuário (login)',
    'username0212' => 'Usuário:',
    'name12' => 'Nome:',
    'password12' => 'Senha:',
    'usertype12' => 'Tipo de Usuário:',
    'user12' => 'Usuário',
    'domainadmin12' => 'Administrador de Domínio',
    'admin12' => 'Administrador',
    'quarrep12' => 'Relatório de Quarentena:',
    'senddaily12' => 'Enviar relatório diário?',
    'quarreprec12' => 'Destinatário do Relatório de Quarentena:',
    'overrec12' => 'Alterar destinarário do relatório?<BR>(usará seu Usuário se em branco)',
    'scanforspam12' => 'Procurar Spam:',
    'scanforspam212' => 'Buscar spam nos e-mails?',
    'pontspam12' => 'Pontuação Spam:',
    'hpontspam12' => 'Pontuação Alta Spam:',
    'usedefault12' => 'Usar Padrão',
    'action_0212' => 'Ação:',
    'reset12' => 'Limpar',
    'areusuredel12' => 'Tem certeza de que quer excluir o usuário ',
    'errorpass12' => 'As senhas não são iguais',
    'edituser12' => 'Edit User',
    'create12' => 'Create',
    'userregex12' => 'User (Regexp)',
    'update12' => 'Update',
    'userfilter12' => 'User Filters for',
    'filter12' => 'Filter',
    'add12' => 'Add',
    'active12' => 'Active',
    'yes12' => 'Yes',
    'no12' => 'No',
    'questionmark12' => '?',
    'toggle12' => 'Activate/Deactivate',
    'sure12' => 'Are you sure?',
    'unknowtype12' => 'Unknown Type',
    'yesshort12' => 'Y',
    'noshort12' => 'N',

    // 13-sa_rules_update.php
    'input13' => 'Run Now',
    'updatesadesc13' => 'Update SpamAssassin Rule Descriptions',
    'updategeoip15' => 'Update GeoIP Database',
    'message113' => 'This utility is used to update the SQL database with up-to-date descriptions of the SpamAssassin rules which are displayed on the Message Detail screen.',
    'message213' => 'This utility should generally be run after a SpamAssassin update, however it is safe to run at any time as it only replaces the existing values and inserts only new values in the table (therefore preserving descriptions from potentially deprecated or removed rules).',
    'saruldesupdate13' => 'SpamAssassin Rule Description Update',
    'rule13' => 'Rule',
    'description13' => 'Description',
    
    // 14-reports.php
    'messlisting14' => 'Message Listing',
    'messop14' => 'Message Operations',
    'messdate14' => 'Total Messages by Date',
    'topmailrelay14' => 'Top Mail Relays',
    'topvirus14' => 'Top Viruses',
    'virusrepor14' => 'Virus Report',
    'topsendersqt14' => 'Top Senders by Quantity',
    'topsendersvol14' => 'Top Senders by Volume',
    'toprecipqt14' => 'Top Recipients by Quantity',
    'toprecipvol14' => 'Top Recipients by Volume',
    'topsendersdomqt14' => 'Top Sender Domains by Quantity',
    'topsendersdomvol14' => 'Top Sender Domains by Volume',
    'toprecipdomqt14' => 'Top Recipient Domains by Quantity',
    'toprecipdomvol14' => 'Top Recipient Domains by Volume',
    'assassinscoredist14' => 'SpamAssassin Score Distribution',
    'assassinrulhit14' => 'SpamAssassin Rule Hits',
    'auditlog14' => 'Audit Log',
    'mrtgreport14' => 'MRTG Style Report',
    'mcpscoredist14' => 'MCP Score Distribution',
    'mcprulehit14' => 'MCP Rule Hit',
    'reports14' => 'Reports',

    // 15-geoip_update.php
    'input15' => 'Run Now',
    'updategeoip15' => 'Update GeoIP Database',
    'message115' => 'This utility is used to download the GeoIP database files (which are updated on the first Tuesday of each month) from',
    'message215' => 'which is used to work out the country of origin for any given IP address and is displayed on the Message Detail page.',
    'downfile15' => 'Downloading file, please wait...',
    'geoipv415' => 'GeoIP IPv4 data file',
    'geoipv615' => 'GeoIP IPv6 data file',
    'downok15' => 'successfully downloaded',
    'downbad15' => 'Error occurred while downloading',
    'downokunpack15' => 'Download complete, unpacking files...',
    'message315' => 'Unable to download GeoIP data file (tried CURL and fsockopen).',
    'message415' => 'Install either cURL extension (preferred) or enable fsockopen in your php.ini',
    'unpackok15' => 'successfully unpacked',
    'extractnotok15' => 'Unable to extract',
    'extractok15' => 'successfully extracted',
    'message515' => 'Unable to extract GeoIP data file.',
    'message615' => 'Enable Zlib in your PHP installation or install gunzip executable.',
    'processok' => 'Process completed!',
    'norread15' => 'Unable to read or write to the',
    'message715' => 'Files still exist for some reason.',
    'message815' => 'Delete them manually from',
    'directory15' => 'directory',
    'geoipupdate15' => 'GeoIP Database Update',
    'dieproxy15' => 'Proxy type should be either "HTTP" or "SOCKS5", check your configuration file',

    // 16-rep_message_listing.php
    'messlisting16' => 'Message Listing',

    // 17-rep_message_ops.php
    'messageops17' => 'Message Operations',
    'messagelisting17' => 'Message Listing',
    
    // 18-bayes_info.php
    'spamassassinbayesdatabaseinfo18' => 'SpamAssassin Bayes Database Info',
    'bayesdatabaseinfo18' => 'Bayes Database Information',
    'nbrspammessage18' => 'Number of Spam Messages:',
    'nbrhammessage18' => 'Number of Ham Messages:',
    'nbrtoken18' => 'Number of Tokens:',
    'oldesttoken18' => 'Oldest Token:',
    'newesttoken18' => 'Newest Token:',
    'lastjournalsync18' => 'Last Journal Sync:',
    'lastexpiry18' => 'Last Expiry:',
    'lastexpirycount18' => 'Last Expiry Reduction Count:',
    'tokens18' => 'tokens',
    
    // 19-clamav_status.php
    'avclamavstatus19' => 'ClamAV Status',

    // 20-docs.php
    'doc20' => 'Documentation',
    'message20' => 'This page does require authentication, so you can put links to your site documentation here and allow your users to access it if you wish.',
    
    // 21-do_message_ops.php
    'opresult21' => 'Operation Results',

    // 22-f-prot_status.php
    'fprotstatus22' => 'F-Prot Status',

    // 23-f-secure_status.php
    'fsecurestatus23' => 'F-Secure Status',

    // 24-mailq.php
    'mqviewer24' => 'Mail Queue Viewer',
    'diemq24' => 'No queue specified',

    // 25-mcafee_status.php
    'mcafeestatus25' => 'McAfee Status',

    // 26-mcp_rules_update.php
    'mcpruledesc26' => 'MCP Rule Description Update',

    // 27-msconfig.php
    'config27' => 'Configuration',
    'msconfig27' => 'MailScanner Configuration',
    
    // 28-ms_lint.php
    'mailscannerlint28' => 'MailScanner Lint',
    'diepipe28' => 'Cannot open pipe',

    // 29-msre_index.php
    'rulesetedit29' => 'Ruleset Editor',

    // 30-msrule.php
    'rules30' => 'Rules',

    // 31-mysql_status.php
    'mysqlstatus31' => 'MySQL Status',

    // 32-postfixmailq.php
    'mqviewer32' => 'Mail Queue Viewer',
    'mqcombined32' => 'Combined mail queue (Inbound and Outbound)',

    // 33-rep_audit_log.php
    'auditlog33' => 'Audit Log',
    'datetime33' => 'Date/Time',
    'user33' => 'User',
    'ipaddress33' => 'IP Address',
    'action33' => 'Action',
    
    // 34-rep_mcp_rule_hits.php
    'mcprulehits34' => 'MCP Rule Hits',
    'rule34' => 'Rule',
    'des34' => 'Description',
    'total34' => 'Total',
    'clean34' => 'Clean',
    'mcp34' => 'MCP',
    
    // 35-rep_mcp_score_dist.php
    'mcpscoredist35' => 'MCP Score Distribution',
    'die35' => 'Error: Needs 2 or more rows of data to be retrieved from database',
    'scorerounded35' => 'Score (rounded)',
    'nbmessages35' => 'No. of messages',
    'score35' => 'Score',
    'count35' => 'Count',
    
    // 36-rep_mrtg_style.php
    'mrtgstyle36' => 'MRTG Style Mail Report',

    // 37-rep_sa_rule_hits.php
    'sarulehits37' => 'SpamAssassin Rule Hits',
    'rule37' => 'Rule',
    'desc37' => 'Description',
    'score37' => 'Score',
    'total37' => 'Total',
    'ham37' => 'Ham',
    'spam37' => 'Spam',
    
    // 38-rep_sa_score_dist.php
    'sascoredist38' => 'SpamAssassin Score Distribution',
    'scorerounded38' => 'Score (rounded)',
    'nbmessage38' => 'No. of messages',
    'score38' => 'Score',
    'count38' => 'Count',
    'die38' => 'Error: Needs 2 or more rows of data to be retrieved from database',

    // 39-rep_top_mail_relays.php
    'topmailrelays39' => 'Top Mail Relays',
    'top10mailrelays39' => 'Top 10 Mail Relays',
    'hostname39' => 'Hostname',
    'ipaddresses39' => 'IP Address',
    'country39' => 'Country',
    'messages39' => 'Messages',
    'viruses39' => 'Viruses',
    'spam39' => 'Spam',
    'volume39' => 'Volume',
    'geoipfailed39' => '(GeoIP lookup failed)',
    'hostfailed39' => '(Hostname lookup failed)',
    
    // 40-rep_top_recipient_domains_by_quantity.php
    'toprecipdomqt40' => 'Top Recipients Domains by Quantity',
    'top10recipdomqt40' => 'Top 10 Recipients Domains by Volume',
    'domain40' => 'Domain',
    'count40' => 'Count',
    'size40' => 'Size',
    
    // 41-rep_top_recipient_domains_by_volume.php
    'toprecipdomvol41' => 'Top Recipients Domains by Volume',
    'top10recipdomvol41' => 'Top 10 Recipient Domains by Volume',
    'domain41' => 'Domain',
    'count41' => 'Count',
    'size41' => 'Size',
    
    // 42-rep_top_recipients_by_quantity.php
    'toprecipqt42' => 'Top Recipients by Quantity',
    'top10recipqt42' => 'Top 10 Recipients by Quantity',
    'email42' => 'E-Mail Address',
    'count42' => 'Count',
    'size42' => 'Size',
    
    // 43-rep_top_recipients_by_volume.php
    'toprecipvol43' => 'Top Recipients by Volume',
    'top10recipvol43' => 'Top 10 Recipients by Volume',
    'email43' => 'E-Mail Address',
    'count43' => 'Count',
    'size43' => 'Size',
    
    // 44-rep_top_sender_domains_by_quantity.php
    'topsenderdomqt44' => 'Top Sender Domains by Quantity',
    'top10senderdomqt44' => 'Top 10 Sender Domains by Quantity',
    'domain44' => 'Domain',
    'count44' => 'Count',
    'size44' => 'Size',
    
    // 45-rep_top_sender_domains_by_volume.php
    'topsenderdomvol45' => 'Top Sender Domains by Volume',
    'top10senderdomvol45' => 'Top 10 Sender Domains by Volume',
    'domain45' => 'Domain',
    'count45' => 'Count',
    'size45' => 'Size',
    
    // 46-rep_top_senders_by_quantity.php
    'topsendersqt46' => 'Top Senders by Quantity',
    'top10sendersqt46' => 'Top 10 Senders by Quantity',
    'email46' => 'E-Mail Address',
    'count46' => 'Count',
    'size46' => 'Size',
    
    // 47-rep_top_senders_by_volume.php
    'topsendersvol47' => 'Top Senders by Volume',
    'top10sendersvol47' => 'Top 10 Senders by Volume',
    'email47' => 'E-Mail Address',
    'count47' => 'Count',
    'size47' => 'Size',
    
    // 48-rep_top_viruses.php
    'topvirus48' => 'Top Viruses',
    'top10virus48' => 'Top 10 Viruses',
    'nodata48' => 'Not enough data to generate a graph.',
    'virus48' => 'Virus',
    'count48' => 'Count',
    'dienorow48' => 'Error: no rows retrieved from database...',

    // 49-rep_total_mail_by_date.php
    'totalmaildate49' => 'Total Mail by Date',
    'totalmailprocdate49' => 'Total Mail Processed by Date',
    'volume49' => 'Volume',
    'nomessages49' => 'No. of messages',
    'date49' => 'Date',
    'barmail49' => 'Mail',
    'barvirus49' => 'Viruses',
    'barspam49' => 'Spam',
    'barmcp49' => 'MCP',
    'barvolume49' => 'Volume',
    'message149' => 'File isn\'t readable. Please make sure that',
    'message249' => 'is readable and writable by MailWatch',
    'total49' => 'Total<br>Mail',
    'clean49' => 'Clean',
    'lowespam49' => 'Low Spam',
    'highspam49' => 'High Spam',
    'blocked49' => 'Blocked',
    'virus49' => 'Virus',
    'mcp49' => 'MCP',
    'unknoweusers49' => 'Unknown<br>Users',
    'resolve49' => 'Can\'t<br>Resolve',
    'rbl49' => 'RBL',
    'totals49' => 'Totals',
    
    // 50-rep_viruses.php
    'virusreport50' => 'Virus Report',

    // 51-sa_lint.php
    'salint51' => 'SpamAssassin Lint',
    'diepipe51' => 'Cannot open pipe',

    // 52-sf_version.php
    'mwandmsversion52' => 'MailWatch and MailScanner Version information',

    // 53-sophos_status.php
    'sophos53' => 'Sophos',

    // 54-mailscanner_relay.php
    'diepipe54' => 'Cannot open pipe',

    // 55-msre_edit.php
    'diefnf55' => 'File not found:',

    // 56-postfix_relay.php
    'diepipe56' => 'Cannot open pipe',

    // 57-quarantine_action.php
    'dienoid57' => 'Error: No Message ID',
    'dienoaction57' => 'Error: No action',
    'diemnf57' => 'Error: Message not found in quarantine',
    'dieuaction57' => 'Unknown action:',

    // 58-viewpart.php
    'nomessid58' => 'No input Message ID',
    'mess58' => 'Message',
    'notfound58' => 'not found',
    'error58' => 'Error:',
    'errornfd58' => 'Error: file not found',
    'part58' => 'Part',
    
    // 59-auto-release.php
    'msgnotfound159' => 'Message not found.  You may have already released this message or the link may have expired.',
    'msgnotfound259' => 'Please contact your Mail Administrator and provide him with this message ID: ',
    'msgnotfound393' => 'if you need this message released',
    'msgreleased59' => 'Message released<br>It may take a few minutes to appear in your Inbox.',
    'tokenmismatch59' => 'Error releasing message - token mismatch',
    'notallowed59' => 'You are not allowed to be here!',
    'dberror59' => 'Something went wrong - please contact support',
    'arview059' => 'View',
    'arrelease59' => 'Release',

     // 60-rpcserver.php
    'paratype160' => 'Parameter type',
    'paratype260' => 'mismatch expected type.',
    'paratype160' => 'mismatch expected type.',
    'notfile60' => 'is not a file.',
    'permdenied60' => 'permission denied.',
    'client160' => 'Client',
    'client260' => 'is not authorized to connect.',

    // 99 - General
    // Space rule for colon. Change it according to your langage typographical rule.
    'colon99' => ' :',
    'diemysql99' => 'Error: no rows retrieved from database',
    'message199' => 'File isn\'t readable. Please make sure that',
    'message299' => 'is readable and writable by MailWatch',
    'mwlogo99' => 'MailWatch Logo',
    'mslogo99' => 'MailScanner Logo',
    'i18_missing' => 'Não traduzido em português',
    'cannot_read_conf' => "Cannot read conf.php - please create it by copying conf.php.example and modifying the parameters to suit.",

);
