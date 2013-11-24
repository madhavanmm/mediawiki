<?php
/** Wu (吴语)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Benojan
 * @author Hercule
 * @author O
 * @author Reedy
 * @author Wu-chinese.com
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author 乌拉跨氪
 * @author 十弌
 */

$fallback = 'zh-hans';

$messages = array(
# User preference toggles
'tog-underline' => '鏈接下橫線：',
'tog-justify' => '段對齊',
'tog-hideminor' => '此垡變化裏囥脫小編',
'tog-hidepatrolled' => '此垡變化裏囥脫巡脫編',
'tog-newpageshidepatrolled' => '新頁表裏囥脫巡脫頁',
'tog-extendwatchlist' => '擴大關注表，顯示全部變化，弗單清此垡個',
'tog-usenewrc' => '使用强化版个近段辰光个改动（JavaScript）',
'tog-numberheadings' => '標題自動編號',
'tog-showtoolbar' => '顯示編傢伙欄',
'tog-editondblclick' => '捺兩記編頁',
'tog-editsection' => '用【編寫】鏈接編段',
'tog-editsectiononrightclick' => '用右捺標題編段',
'tog-showtoc' => '顯示目錄（為超過3個標題個頁）',
'tog-rememberpassword' => '箇流覽器裏記牢我個登錄狀態（記$1{{PLURAL:$1|日|日}}）',
'tog-watchcreations' => '畀我建个页搭我传个文件加进我个关注表里去',
'tog-watchdefault' => '畀我编个页搭文件加进我个关注表里去',
'tog-watchmoves' => '畀我移个页搭文件加进我个监控列表里去',
'tog-watchdeletion' => '畀我刪脫個頁搭文件加進我個關注表裏',
'tog-minordefault' => '默認記全部編都是細個',
'tog-previewontop' => '編寫框頭前顯示先望',
'tog-previewonfirst' => '頭垡編寫顯示先望',
'tog-nocache' => '弗用流览器页面慢存',
'tog-enotifwatchlistpages' => '我關注表裏個頁要弗文件變脫到用電子信通知我',
'tog-enotifusertalkpages' => '我用戶討論頁變脫到用電子信通知我',
'tog-enotifminoredits' => '頁搭文件細編也用電子信通知我',
'tog-enotifrevealaddr' => '電子信通知單裏顯示我個電子信地址',
'tog-shownumberswatching' => '顯示關注人數',
'tog-oldsig' => '能界签名先望：',
'tog-fancysig' => '畀簽名當wiki文本（弗自動鏈接）',
'tog-uselivepreview' => '用当场先望（试验）',
'tog-forceeditsummary' => '編要空白到提醒我',
'tog-watchlisthideown' => '關注表裏囥脫我所編',
'tog-watchlisthidebots' => '關注表裏囥脫機器人所編',
'tog-watchlisthideminor' => '關注表裏囥脫細編',
'tog-watchlisthideliu' => '關注表裏囥脫已登用戶所編',
'tog-watchlisthideanons' => '關注表裏囥脫隱姓埋名用戶所編',
'tog-watchlisthidepatrolled' => '關注表裏囥脫巡脫編',
'tog-ccmeonemails' => '我發畀各許用戶箇電子信也發份畀我',
'tog-diffonly' => '比較兩版弗樣到弗顯示頁內容',
'tog-showhiddencats' => '顯示囥脫分類',
'tog-norollbackdiff' => '执行退回之后弗显示两样',
'tog-useeditwarning' => '離開編頁朆保存到提醒我',
'tog-prefershttps' => '登录后老世用保险连接',

'underline-always' => '老世',
'underline-never' => '老世弗',
'underline-default' => '皮膚要弗流覽器默認',

# Font style option in Special:Preferences
'editfont-style' => '編寫區字體樣式：',
'editfont-default' => '流覽器默認',
'editfont-monospace' => '樣闊字體',
'editfont-sansserif' => 'Sans-serif字體',
'editfont-serif' => 'Serif字體',

# Dates
'sunday' => '星期日',
'monday' => '星期一',
'tuesday' => '星期二',
'wednesday' => '星期三',
'thursday' => '星期四',
'friday' => '星期五',
'saturday' => '星期六',
'sun' => '日',
'mon' => '一',
'tue' => '二',
'wed' => '三',
'thu' => '四',
'fri' => '五',
'sat' => '六',
'january' => '1月',
'february' => '2月',
'march' => '3月',
'april' => '4月',
'may_long' => '5月',
'june' => '6月',
'july' => '7月',
'august' => '8月',
'september' => '9月',
'october' => '10月',
'november' => '11月',
'december' => '12月',
'january-gen' => '一月',
'february-gen' => '二月',
'march-gen' => '三月',
'april-gen' => '四月',
'may-gen' => '五月',
'june-gen' => '六月',
'july-gen' => '七月',
'august-gen' => '八月',
'september-gen' => '九月',
'october-gen' => '十月',
'november-gen' => '十一月',
'december-gen' => '十二月',
'jan' => '1月',
'feb' => '2月',
'mar' => '3月',
'apr' => '4月',
'may' => '5月',
'jun' => '6月',
'jul' => '7月',
'aug' => '8月',
'sep' => '9月',
'oct' => '10月',
'nov' => '11月',
'dec' => '12月',
'january-date' => '1月 $1',
'february-date' => '2月 $1',
'march-date' => '3月 $1',
'april-date' => '4月 $1',
'may-date' => '5月 $1',
'june-date' => '6月 $1',
'july-date' => '7月 $1',
'august-date' => '8月 $1',
'september-date' => '9月 $1',
'october-date' => '10月 $1',
'november-date' => '11月 $1',
'december-date' => '12月 $1',

# Categories related messages
'pagecategories' => '$1个分类',
'category_header' => '“$1”分類裏個頁',
'subcategories' => '兒分類',
'category-media-header' => '"$1"分类里个媒体',
'category-empty' => "''箇分类里页搭媒体能界还呒有。''",
'hidden-categories' => '$1囥脫分類',
'hidden-category-category' => '囥脫分類',
'category-subcat-count' => '{{PLURAL:$2|箇分類便只接落去許兒分類。|箇分類有$1個兒分類，攏共$2個兒分類。}}',
'category-subcat-count-limited' => '箇分類有下向許$1個兒分類。',
'category-article-count' => '{{PLURAL:$2|箇分類便只下向許頁。|箇分類裏有下底$1許頁，攏共$2張。}}',
'category-article-count-limited' => '能界個分類裏有下底$1頁。',
'category-file-count' => '{{PLURAL:$2|箇分类便只下头个文件。|箇分类里有下头$1个文件，共$2个文件。}}',
'category-file-count-limited' => '能界個分類裏有下底$1個文件。',
'listingcontinuesabbrev' => '接落。',
'index-category' => '索引拉许个页面',
'noindex-category' => '朆索引个页',
'broken-file-category' => '有无用文件链接个页',

'about' => '有关',
'article' => '內容頁',
'newwindow' => '（用新窗口开）',
'cancel' => '取消',
'moredotdotdot' => '還多...',
'morenotlisted' => '箇張表還朆完成。',
'mypage' => '我个页面',
'mytalk' => '我个讨论',
'anontalk' => '箇IP地址個話',
'navigation' => '導航',
'and' => '&#32;搭',

# Cologne Blue skin
'qbfind' => '尋',
'qbbrowse' => '流覽',
'qbedit' => '編',
'qbpageoptions' => '箇頁',
'qbmyoptions' => '我頁',
'qbspecialpages' => '特殊頁',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => '加話題',
'vector-action-delete' => '刪',
'vector-action-move' => '移',
'vector-action-protect' => '保',
'vector-action-undelete' => '弗刪',
'vector-action-unprotect' => '换保护状态',
'vector-simplesearch-preference' => '用简单搜寻条（只Vector皮肤好用）',
'vector-view-create' => '建',
'vector-view-edit' => '编',
'vector-view-history' => '望页史',
'vector-view-view' => '读',
'vector-view-viewsource' => '望源码',
'actions' => '动作',
'namespaces' => '名字空间',
'variants' => '变量',

'errorpagetitle' => '錯誤',
'returnto' => '转到$1。',
'tagline' => '从{{SITENAME}}来',
'help' => '幫忙',
'search' => '寻',
'searchbutton' => '搜寻',
'go' => '去',
'searcharticle' => '去',
'history' => '頁史',
'history_short' => '历史',
'updatedmarker' => '從上趟訪問起個更新',
'printableversion' => '打印版',
'permalink' => '老世链接',
'print' => '打印',
'view' => '望',
'edit' => '编',
'create' => '建',
'editthispage' => '編箇頁',
'create-this-page' => '建箇頁',
'delete' => '刪',
'deletethispage' => '刪箇頁',
'undeletethispage' => '弗删箇页',
'undelete_short' => '復原消脫個$1個編寫',
'viewdeleted_short' => '望̺$1个删脱编写',
'protect' => '保',
'protect_change' => '改',
'protectthispage' => '保箇頁',
'unprotect' => '變更保態',
'unprotectthispage' => '變更箇頁保態',
'newpage' => '新页',
'talkpage' => '探討箇頁',
'talkpagelinktext' => '討論',
'specialpage' => '特別頁',
'personaltools' => '私人家伙',
'postcomment' => '新段',
'articlepage' => '望內容頁',
'talk' => '探讨',
'views' => '望',
'toolbox' => '家伙匣',
'userpage' => '望用戶頁',
'projectpage' => '望計劃頁',
'imagepage' => '望文件頁',
'mediawikipage' => '望信息頁',
'templatepage' => '望模板頁',
'viewhelppage' => '望幫忙頁',
'categorypage' => '望分類頁',
'viewtalkpage' => '望探討頁',
'otherlanguages' => '别样话版',
'redirectedfrom' => '（从$1转戳到箇里）',
'redirectpagesub' => '轉戳頁',
'lastmodifiedat' => '箇页此垡来$1 $2改进。',
'viewcount' => '箇頁望過$1垡。',
'protectedpage' => '受保頁',
'jumpto' => '蹦到：',
'jumptonavigation' => '导航',
'jumptosearch' => '搜寻',
'view-pool-error' => '對弗住，服務器能界超載。
望箇頁個人忒多哉。
相勞爾等瑲起再試試相趒箇頁來。

$1',
'pool-timeout' => '等锁过时',
'pool-queuefull' => '池队列满哉',
'pool-errorunknown' => '弗识个错误',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => '有关{{SITENAME}}',
'aboutpage' => 'Project:有关',
'copyright' => '内容侪拉$1下底发布。',
'copyrightpage' => '{{ns:project}}:版权',
'currentevents' => '箇阶段个事干',
'currentevents-url' => 'Project:箇阶段个事干',
'disclaimers' => '甮追問',
'disclaimerpage' => 'Project:甮追問',
'edithelp' => '编写帮助',
'helppage' => 'Help:目录',
'mainpage' => '封面',
'mainpage-description' => '封面',
'policy-url' => 'Project:策略',
'portal' => '社区台门',
'portal-url' => 'Project:社区台门',
'privacy' => '隱私策略',
'privacypage' => 'Project:隱私策略',

'badaccess' => '权限',
'badaccess-group0' => '弗準爾做箇操作。',
'badaccess-groups' => '爾個請求要徠{{PLURAL:$2|箇個}}用戶組裏好用：$1。',

'versionrequired' => '需要$1版個MediaWiki',
'versionrequiredtext' => '用箇页需要$1版个MediaWiki。望[[Special:Version|版本页]]。',

'ok' => '好',
'retrievedfrom' => '取自“$1”',
'youhavenewmessages' => '你侬有$1（$2）。',
'newmessageslinkplural' => '{{PLURAL:$1|新消息}}',
'newmessagesdifflinkplural' => '此垡̺{{PLURAL:$1|变化}}',
'youhavenewmessagesmulti' => '爾徠$1裏有新信息',
'editsection' => '編',
'editold' => '编',
'viewsourceold' => '望源碼',
'editlink' => '编',
'viewsourcelink' => '望源碼',
'editsectionhint' => '编段: $1',
'toc' => '目录',
'showtoc' => '顯示',
'hidetoc' => '囥脫',
'thisisdeleted' => '望要弗復原$1？',
'viewdeleted' => '$1望望相？',
'restorelink' => '$1個刪脫個版本',
'feedlinks' => '訂閱：',
'feed-invalid' => '訂閱類型無效。',
'feed-unavailable' => '目前弗支持聯訂',
'site-rss-feed' => '$1個RSS訂閱',
'site-atom-feed' => '$1个Atom订阅',
'page-rss-feed' => '“$1”個RSS訂閱',
'page-atom-feed' => '"$1" 个Atom订阅',
'red-link-title' => '$1 （呒有箇页）',
'sort-descending' => '倒排',
'sort-ascending' => '顺排',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => '页',
'nstab-user' => '用户页',
'nstab-media' => '媒體頁',
'nstab-special' => '特別页',
'nstab-project' => '項目頁',
'nstab-image' => '文件',
'nstab-mediawiki' => '信息',
'nstab-template' => '模板',
'nstab-help' => '幫忙頁',
'nstab-category' => '分类',

# Main script and global functions
'nosuchaction' => '嘸能操作',
'nosuchactiontext' => 'URL指定個命令無效。爾嘸數畀URL打錯哉，要勿点击仔出錯個鏈接。也嘸數{{SITENAME}}用個軟件本身出錯緣故。',
'nosuchspecialpage' => '嘸能個特別頁',
'nospecialpagetext' => '<strong>侬请求个特殊页面无效。</strong>

参考特殊页面列表[[Special:SpecialPages| {{int:specialpages}}]]。',

# General errors
'error' => '错误',
'databaseerror' => '数据库错误',
'databaseerror-text' => '數據庫討信出錯。
嘸數說明軟件裏有一個bug。',
'databaseerror-textcl' => '數據庫討信出錯。',
'databaseerror-query' => '討信：$1',
'databaseerror-function' => '功能ː $1',
'databaseerror-error' => '出錯：$1',
'laggedslavemode' => '警告: 页面可能弗包含最近个更新。',
'readonly' => '數據庫鎖牢',
'enterlockreason' => '请输入锁定个原因，包括预计解锁个辰光',
'readonlytext' => '数据库目前禁止输入新内容及更改，
箇蛮有可能是因为数据库拉许维修，完成仔即可恢复。

管理员有如下解释：$1',
'missing-article' => '数据库寻弗着想寻个页面文本：名字“$1”$2。

箇一般是由于点击了链向旧有差异或历史个链接，而原有修订已拨删除导致个。

如果弗是箇种情况，你侬作兴寻着软件里一个错误。畀URL地址记落来，搭[[Special:ListUsers/sysop|管理员]]报告。',
'missingarticle-rev' => '（修订#：$1）',
'missingarticle-diff' => '（两样：$1、$2）',
'readonly_lag' => '从数据库服务器垃拉从主服务器上更新，数据库已经拨自动锁定',
'internalerror' => '内部错误',
'internalerror_info' => '内部错误：$1',
'fileappenderrorread' => '当附加时无法读取"$1"。',
'fileappenderror' => '“$1”附加到“$2”弗来三。',
'filecopyerror' => '弗好拿文件“$1”复制到“$2”。',
'filerenameerror' => '拿文件“$1”重命名为“$2”失败。',
'filedeleteerror' => '弗好删除文件“$1”。',
'directorycreateerror' => '创建目录“$1”失败。',
'filenotfound' => '寻弗着文件 "$1"。',
'fileexistserror' => '弗好写入文件“$1”：文件已存在',
'unexpected' => '非正常值：“$1”=“$2”。',
'formerror' => '错误：提交表单失败',
'badarticleerror' => '呒处垃拉箇只页面进行箇只操作。',
'cannotdelete' => '无处删除页面或图像 "$1"。
渠作兴已经拨别人家删除脱哉。',
'cannotdelete-title' => '"$1"箇页删弗爻',
'no-null-revision' => '"$1"页呒处建新个修改',
'badtitle' => '坏标题',
'badtitletext' => '所请求页面个标题是无效个、弗存在，跨语言或跨wiki链接个标题错误。渠作兴包含一只或多只弗好用拉标题里向字符。',
'perfcached' => '下向是缓存数据，呒数弗是最新个。 A maximum of {{PLURAL:$1|one result is|$1 results are}} available in the cache.',
'perfcachedts' => '下头是缓存数据，压末一趟更新辰光是$1。 A maximum of {{PLURAL:$4|one result is|$4 results are}} available in the cache.',
'querypage-no-updates' => '当前禁止对此页面进行更新。箇搭个数据弗好立即刷新。',
'wrong_wfQuery_params' => '错误个参数拨传递到 wfQuery（）<br />
函数：$1<br />
查询：$2',
'viewsource' => '望源码',
'actionthrottled' => '动作已压制',
'actionthrottledtext' => '基于反垃圾链接个考量，限制垃拉短时间内多趟重复箇只操作。请过脱几分钟再试试看。',
'protectedpagetext' => '箇页锁牢定，防编搭各许操作。',
'viewsourcetext' => '侬可以查看搭仔复制箇只页面个源码：',
'viewyourtext' => "你侬好望也好畀'''你侬编个'''复制到箇页：",
'protectedinterface' => '箇页为箇维基个软件提供界面文本，锁牢定防乱用。
加改全部维基个译文，用[//translatewiki.net/ translatewiki.net]，MediaWiki软件个本地化计划。',
'editinginterface' => "'''警告：''' 侬来里编写个页面是畀软件用个界面文本。箇页变化会影响各许人个界面样子。假使要畀全部维基翻译，用 [//translatewiki.net/wiki/Main_Page?setlang=zh-hans translatewiki.net]，MediaWiki软件个本地化计划。",
'cascadeprotected' => '箇只页面拨保护拉许，因为箇只页面拨下底已经标注“联锁保护”个{{PLURAL:$1|一只|多只}}被保护页面包含：
$2',
'namespaceprotected' => "侬无没编辑'''$1'''名字空间里向页面个权限。",
'customcssprotected' => '箇CSS页你呒处编，箇页有各许用户个私人设置。',
'customjsprotected' => '箇JavaScript页你呒处编，箇页有各许用户个私人设置。',
'mycustomcssprotected' => '箇CSS页你呒处编。',
'mycustomjsprotected' => '箇JavaScript页你呒处编。',
'myprivateinfoprotected' => '你个私人信息你呒处编。',
'mypreferencesprotected' => '你个私人偏好你呒处编。',
'ns-specialprotected' => '特殊页编辑是弗来三个。',
'titleprotected' => "箇只标题已经拨[[User:$1|$1]]保护以防止创建。理由是''$2''。",
'filereadonlyerror' => '"$1"文件呒处改，文件存勒 "$2" 是只读模式。管理员考虑畀渠锁牢个理由是："$3"。',
'invalidtitle-knownnamespace' => '非法个题目头，有名字空间$2搭文字$3',
'invalidtitle-unknownnamespace' => '非法个题目头，有弗识个数字$1搭文字$2',
'exception-nologin' => '朆登录',
'exception-nologin-text' => '箇页要勿箇操作需要你登录到箇wiki裏来。',

# Virus scanner
'virus-badscanner' => "设置问题：未知个反病毒扫描器：''$1''",
'virus-scanfailed' => '扫描失败（代码 $1）',
'virus-unknownscanner' => '未知个反病毒扫描器：',

# Login and logout pages
'logouttext' => "'''你侬登出哉。'''

部份页面呒数还会显示你侬还登勒里，到你侬畀浏览器慢存清爻止。",
'welcomeuser' => '走来赞，$1！',
'welcomecreation-msg' => '你个账号建起来哉。
覅忘记哉走去改你个[[Special:Preferences|{{SITENAME}}个私人偏好]]。',
'yourname' => '用户名:',
'userlogin-yourname-ph' => '打进你侬个用户名',
'createacct-another-username-ph' => '打进用户名',
'yourpassword' => '密码:',
'userlogin-yourpassword-ph' => '密码打进去',
'createacct-yourpassword-ph' => '密码打进去',
'yourpasswordagain' => '密码再打一遍:',
'createacct-yourpasswordagain-ph' => '密码打一遍添',
'remembermypassword' => '徕箇浏览器里畀我登进去个记牢（记$1{{PLURAL:$1|日|日}}）',
'userlogin-remembermypassword' => '长期徕线里',
'userlogin-signwithsecure' => '用保险链接',
'yourdomainname' => '侬个域名：',
'password-change-forbidden' => '箇wiki裏呒处改你侬个密码。',
'externaldberror' => '迭个作兴是由于验证数据库错误或者侬拨禁止更新侬个外部账号。',
'login' => '登进去',
'nav-login-createaccount' => '登进去 / 建账号',
'loginprompt' => '必须用缓存（cookies）好登进{{SITENAME}}。',
'userlogin' => '登进去 / 建账号',
'userloginnocreate' => '登录',
'logout' => '登出',
'userlogout' => '登出',
'notloggedin' => '弗曾登录',
'userlogin-noaccount' => '账号还呒？',
'userlogin-joinproject' => '加进{{SITENAME}}',
'nologin' => "你侬还呒有账号？'''$1'''。",
'nologinlink' => '建新账号',
'createaccount' => '建账号',
'gotaccount' => "已经有仔帐号哉？ '''$1'''。",
'gotaccountlink' => '登录',
'userlogin-resetlink' => '忘记登录细节？',
'userlogin-resetpassword-link' => '转设密码',
'helplogin-url' => '帮助ː登进',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|登进帮忙]]',
'userlogin-loggedin' => '你侬用{{GENDER:$1|$1}}登进来哉。用下向个表以别样身份登进。',
'userlogin-createanother' => '建别样账号',
'createacct-join' => '下向打进你侬个信息。',
'createacct-another-join' => '下向打进新账号个信息。',
'createacct-emailrequired' => '电子信地址',
'createacct-emailoptional' => '电子信地址（填弗填由你）',
'createacct-email-ph' => '畀你侬个电子信地址打进去',
'createacct-another-email-ph' => '电子信地址打进去',
'createaccountmail' => '用临时随便密码发到指定个电子信地址',
'createacct-realname' => '真名字（随意）',
'createaccountreason' => '理由：',
'createacct-reason' => '理由：',
'createacct-reason-ph' => '为何物建别样账号',
'createacct-captcha' => '保险检查',
'createacct-imgcaptcha-ph' => '畀上向望着个字打箇里',
'createacct-submit' => '建你侬个账号',
'createacct-another-submit' => '建别样账号',
'createacct-benefit-heading' => '{{SITENAME}} 是搭你侬样个人建起个。',
'createacct-benefit-body1' => '{{PLURAL:$1|编写}}',
'createacct-benefit-body2' => '{{PLURAL:$1|页}}',
'createacct-benefit-body3' => '此垡 {{PLURAL:$1|出力个人}}',
'badretype' => '倷输入个密码搭倪个档案弗配。',
'userexists' => '用戶名有人用哉。相勞爾揀別樣名字。',
'loginerror' => '登录错误',
'createacct-error' => '建账号出错',
'createaccounterror' => '无法建立账户：$1',
'nocookiesnew' => '侬个账户创建成功！Cookies像煞拨侬关拉许，请开开来再登录。',
'nocookieslogin' => '本站利用Cookies进行用户登录，侬个Cookies像煞关拉许，请开开来再登录。',
'nocookiesfornew' => '用户账号朆建起，我里确认弗了渠个原因。
你要准定cookies是开勒里个，刷新箇页试试凑相。',
'noname' => '用户名无效。',
'loginsuccesstitle' => '登录成功',
'loginsuccess' => "'''侬现在以 \"\$1\" 个身份登录到{{SITENAME}}。 '''",
'nosuchuser' => '寻弗着用户“$1”。用户名是大小写敏感外加区分繁简体个。请检查拼写，或者[[Special:UserLogin/signup|开只新账户]]。',
'nosuchusershort' => '无没叫“$1”个用户。请检查侬个输入。',
'nouserspecified' => '侬必须选个用户名。',
'login-userblocked' => '箇个用户拨封锁拉许。弗允许登录。',
'wrongpassword' => '密码弗对。请侬再试试看。',
'wrongpasswordempty' => '密码为空，请重试。',
'passwordtooshort' => '密码起码要$1个字符。',
'password-name-match' => '密码弗好搭户名一样。',
'password-login-forbidden' => '用箇名字搭密码是弗准个。',
'mailmypassword' => '新密码用电子信寄畀我',
'passwordremindertitle' => '{{SITENAME}} 个临时新密码',
'passwordremindertext' => '有人（作兴是侬，来自IP地址$1）已经请求{{SITENAME}}个新密码（$4）。
用户“$2”个一只新临时密码现在已经设置好为“$3”。
假使箇只动作是侬发起个，侬需要立即登录并选择一只新个密码。
侬个临时密码会得垃拉$5日里向过期。

假使箇只请求弗是侬发起个，或者侬已经拿密码想起来外加弗准备改脱渠，
侬可以忽略此消息并继续使用侬个旧密码。',
'noemail' => '用户"$1"弗曾登记电子邮件地址。',
'noemailcreate' => '侬要提供只有效个电子邮件地址',
'passwordsent' => '用户"$1"个新密码已经寄往登记个电子邮件地址。
请收着仔再登录。',
'blocked-mailpassword' => '侬个IP地址处于查封状态，弗允许编辑，为仔安全起见，密码恢复功能已经禁用。',
'eauthentsent' => '一封确认信已经发送到指定个e-mail地址。垃拉发送其它邮件到箇只账户之前，侬必须首先按照箇封信里向个指示确认箇只电子邮箱真实有效。',
'throttled-mailpassword' => '密码转设电子信徕最近$1个钟头里发畀你侬哉。保险点，密码转设电子信$1个钟头只一垡好发。',
'mailerror' => '发送邮件错误：$1',
'acct_creation_throttle_hit' => '弗好意思，使用箇只IP个访客已经创建仔$1只账号，迭个是箇段辰光里向所允许个最大值。箇咾使用箇只IP个地址个访客暂时弗好再创建账户。',
'emailauthenticated' => '侬个电子邮箱地址已经垃拉$2 $3确认有效。',
'emailnotauthenticated' => '侬个邮箱地址<strong>还弗曾认证</strong>。下底眼功能将弗会发送任何邮件。',
'noemailprefs' => '指定一只电子邮箱地址以使用箇眼功能。',
'emailconfirmlink' => '确认邮箱地址',
'invalidemailaddress' => '邮箱地址格式弗对，请输入正确个邮箱地址或清空输入框。',
'cannotchangeemail' => '箇wiki里账号电子信地址呒处改。',
'emaildisabled' => '箇网站电子信呒处发。',
'accountcreated' => '户头开好哉',
'accountcreatedtext' => '[[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|talk]])个账号建好哉。',
'createaccount-title' => '垃拉{{SITENAME}}里向创建新账户',
'createaccount-text' => '有人垃拉{{SITENAME}}里向利用侬个邮箱创建仔一只叫 "$2" 个新帐户（$4），密码是 "$3" 。侬应该立即登录并更改密码。

如果箇个账户创建错误个说话，侬可以忽略此信息。',
'usernamehasherror' => '用户名里向弗好包含hash字符',
'login-throttled' => '你侬试登忒多次哉。
等 $1 再试试凑相。',
'login-abort-generic' => '登录弗成功 - 流产',
'loginlanguagelabel' => '语言：$1',
'suspicious-userlogout' => '侬登出个要求已经拨回头脱，因为渠可能是由已损坏个浏览器或者缓存代理传送个。',

# Change password dialog
'resetpass' => '更改密码',
'resetpass_announce' => '侬是通过一只临时发送到e-mail里向个代码登录的。要完成登录，侬必须垃此地设定一只新密码：',
'resetpass_header' => '更改密码',
'oldpassword' => '旧密码:',
'newpassword' => '新密码:',
'retypenew' => '再打一遍新密码:',
'resetpass_submit' => '设置密码再登录',
'changepassword-success' => '密碼改好哉！
能界登錄當中...',
'resetpass_forbidden' => '密码弗好更改',
'resetpass-no-info' => '侬必须登录仔再好直接进入箇只页面。',
'resetpass-submit-loggedin' => '更改密码',
'resetpass-submit-cancel' => '取消',
'resetpass-wrong-oldpass' => '无效个临时或者现有密码。
侬作兴已经成功拿密码改脱，或者已经请求一个新个临时密码。',
'resetpass-temp-password' => '临时密码：',

# Special:PasswordReset
'passwordreset-username' => '用戶名',

# Edit page toolbar
'bold_sample' => '黑体文本',
'bold_tip' => '黑体文本',
'italic_sample' => '斜体文本',
'italic_tip' => '斜体文本',
'link_sample' => '链接标题',
'link_tip' => '内部链接',
'extlink_sample' => 'http://www.example.com 链接标题',
'extlink_tip' => '外部链接（前头记牢加 http://）',
'headline_sample' => '标题文本',
'headline_tip' => '2级标题文字',
'nowiki_sample' => '徕箇里插入非格式文本',
'nowiki_tip' => '弗管wiki格式',
'image_tip' => '嵌入文件',
'media_tip' => '文件链接',
'sig_tip' => '签名搭辰光戳',
'hr_tip' => '水平线 （小心用）',

# Edit pages
'summary' => '摘要:',
'subject' => '主题 / 标题：',
'minoredit' => '箇是小变化',
'watchthis' => '关注箇页',
'savearticle' => '保存页面',
'preview' => '望望相',
'showpreview' => '显示望望相',
'showlivepreview' => '实时预览',
'showdiff' => '显示变化',
'anoneditwarning' => "'''警告：''' 你侬朆登进来。
你侬个IP地址会记进箇页个编史里。",
'anonpreviewwarning' => "''侬弗曾登录。侬个IP位址会得记录拉此页个编辑历史里向。''",
'missingsummary' => "'''提示：''' 侬弗曾提供编辑摘要。假使侬再次单击保存，侬个编辑将弗带编辑摘要保存。",
'missingcommenttext' => '请垃下头输入备注。',
'missingcommentheader' => "'''提示：''' 侬弗曾为此评论提供只标题。如果侬再次单击“{{int:savearticle}}”，侬个编辑将弗带标题保存。",
'summary-preview' => '摘要预览：',
'subject-preview' => '主题 / 标题 预览：',
'blockedtitle' => '用户拨查封',
'blockedtext' => "侬个用户名或IP地址已经拨$1查封。

箇趟查封是由$1所封个。原因是''$2''。

* 箇趟查封开始个辰光是：$8
* 箇趟查封到期个辰光是：$6
* 对于畀查封者：$7

侬可以联络$1或者其他个 [[{{MediaWiki:Grouppage-sysop}}|管理员]]，讨论箇趟查封。
除非侬已经垃侬个 [[Special:Preferences|个人设置]]里向设置仔一只有效个电子邮件地址，弗然侬弗好使用「e-mail箇位用户」功能。当设置了一只有效个电子邮件地址之后，箇只功能是弗会畀封锁个。

侬个IP地址是$3，而该查封ID是 #$5。 请垃拉侬个查询里向注明以上所有资料。",
'autoblockedtext' => "侬个IP地址已经自动查封，由于之前另一位 搭侬用一样IP个用户畀$1所查封。
而查封个原因是：

:''$2''

* 箇趟查封个开始辰光是：$8
* 箇趟查封个到期辰光是：$6
* 对于畀查封者：$7

侬可以联络$1或者其他个 [[{{MediaWiki:Grouppage-sysop}}|管理员]]，讨论箇趟查封。
除非侬已经垃侬个 [[Special:Preferences|个人设置]]里向设置仔一只有效个电子邮件地址，弗然侬弗好使用「e-mail箇位用户」功能。当设置了一只有效个电子邮件地址之后，箇只功能是弗会畀封锁个。

侬个IP地址是$3，而该查封ID是 #$5。 请垃拉侬个查询里向注明以上所有资料。",
'blockednoreason' => '弗曾拨原因',
'whitelistedittext' => '侬必须$1才能编辑。',
'confirmedittext' => '垃拉编辑此页之前侬必须确认侬个邮箱地址。请通过[[Special:Preferences|个人设置]]设置并验证侬个邮箱地址。',
'nosuchsectiontitle' => '寻弗着箇只段落',
'nosuchsectiontext' => '侬尝试编辑个章节弗存在。
作兴是垃拉侬查看页面个辰光已经移动或者畀删除。',
'loginreqtitle' => '必须登录',
'loginreqlink' => '登录',
'loginreqpagetext' => '侬必须$1再好查看其它页面。',
'accmailtitle' => '密码已发送哉。',
'accmailtext' => "已经为[[User talk:$1|$1]] 产生只随机密码，并且已经发送到$2。

登录之后，侬可以垃拉 ''[[Special:ChangePassword|箇只页面]]''更改密码。",
'newarticle' => '（新）',
'newarticletext' => "倷跟仔链接来着一个还弗勒里个页面。
要创建该页面呢，就勒下底个框框里向开始写（[[{{MediaWiki:Helppage}}|帮助页面]]浪有更加多个信息）。
要是倷是弗用心到该搭个说话，只要点击倷浏览器个'''返回'''揿钮。",
'anontalkpagetext' => "---- ''箇是一个还弗曾建立账户个匿名用户个讨论页, 箇咾我伲只好用IP地址来搭渠联络。该IP地址可能由几名用户共享。如果侬是一名匿名用户并认为箇只页面高头个评语搭侬弗搭界，请 [[Special:UserLogin/signup|创建新账户]]或[[Special:UserLogin|登录]]来避免垃拉将来搭其他匿名用户混淆。''",
'noarticletext' => '箇页目前呒有文本。
你侬好来别个页[[Special:Search/{{PAGENAME}}|搜寻箇页标题]]、<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} 搜寻相关日志]要勿[{{fullurl:{{FULLPAGENAME}}|action=edit}} 编箇页]。</span>',
'noarticletext-nopermission' => '箇页目前还呒有文本。
你侬好徕别个页[[Special:Search/{{PAGENAME}}|搜寻箇页标题]]，
要勿<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} 搜寻相关日志]</span>，暂时弗允许你侬建箇页。',
'userpage-userdoesnotexist' => '用户账户“<nowiki>$1</nowiki>”弗曾创建。请垃拉创建／编辑迭个页面前头先检查一记。',
'userpage-userdoesnotexist-view' => '用户账户“$1”弗曾创建。',
'blocked-notice-logextract' => '箇位用户箇歇畀封锁垃许。
下头有最近个封锁纪录以供参考：',
'clearyourcache' => "'''注意：垃拉保存之后，侬必须清除浏览器个缓存再好看见所作出个改变。'''
'''Mozilla / Firefox / Safari'''：揿牢''Shift''再点击''刷新''，或揿''Ctrl-F5''或''Ctrl-R''（垃拉Mac上揿 ''Command-R''）；
'''Konqueror'''：只需点击''刷新''或揿''F5''；
'''Opera'''：垃拉 ''工具→首选项''里向完整清除渠拉个缓存，或揿''Alt-F5''；
'''Internet Explorer'''：揿牢''Ctrl''再点击''刷新''，或揿''Ctrl-F5''。",
'usercssyoucanpreview' => "'''提示：''' 垃拉保存之前请用“{{int:showpreview}}”揿钮来测试新 CSS 。",
'userjsyoucanpreview' => "'''提示：''' 垃拉保存之前请用“{{int:showpreview}}”揿钮来测试新 JavaScript 。",
'usercsspreview' => "'''注意侬只是垃许预览侬个 CSS。'''
'''还弗曾保存！'''",
'userjspreview' => "'''注意侬只是垃许测试／预览侬个 JavaScript。'''
'''还弗曾保存！'''",
'userinvalidcssjstitle' => "'''警告：''' 弗存在皮肤\"\$1\"。注意自定义个 .css 搭 .js 页要使用小写标题，譬如，{{ns:user}}:Foo/vector.css 弗同于 {{ns:user}}:Foo/Vector.css。",
'updated' => '（已更新）',
'note' => "'''注意：'''",
'previewnote' => "'''记牢！箇还是“望望相”；你侬个修改还朆保存起！'''",
'previewconflict' => '箇个预览显示了上头文字编辑区里向个内容。渠会得垃拉侬保存之后出现。',
'session_fail_preview' => "'''弗好意思！由于会话数据落失，我伲弗好处理侬个编辑。'''请重试。如果再次失败，请尝试[[Special:UserLogout|登出]]之后重新登录。",
'session_fail_preview_html' => "'''弗好意思！我伲弗好处理侬垃拉进程数据落失辰光个编辑。'''

''由于{{SITENAME}}允许使用原始个 HTML，为著防范 JavaScript 攻击，预览已畀隐藏。''

'''如果这是一次合法的编辑，请重新进行尝试。'''如果还不行，请 [[Special:UserLogout|退出]]并重新登录。",
'token_suffix_mismatch' => "'''由于侬用户端里向个编辑令牌毁损仔一些标点符号字元，为防止编辑个文字损坏，侬个编辑已经畀回头。'''
箇种情况通常出现垃拉使用含有交关bug、以网络为主个匿名代理服务个辰光。",
'editing' => '徕里编$1',
'editingsection' => '徕里编写$1（段）',
'editingcomment' => '垃许编辑 $1 (新段落)',
'editconflict' => '编辑冲突: $1',
'explainconflict' => '有人垃拉侬开始编辑之后更改仔页面。
上头个文字框内显示个是箇歇本页个内容。
侬个修改显示垃拉下底只文字框里向。
侬应当拿侬个修改加入到现有个内容里向。
<b>只有</b>上头文字框里向个内容会得垃侬点击"保存页面"之后畀保存。',
'yourtext' => '侬个文字',
'storedversion' => '已保存修订版本',
'nonunicodebrowser' => "'''警告：侬个浏览器弗兼容Unicode编码。'''箇搭有一只工作区将使侬可以安全编辑页面：非ASCII字符将以十六进制编码方式出现垃拉编辑框里向。",
'editingold' => "''' 注意：倷勒里改动一只已经过期个页面修改。 如果倷保存俚个说话，勒拉该个修改之后个亨白浪当个修改侪会呒拨个。'''",
'yourdiff' => '两样',
'copyrightwarning' => "请注意你侬对{{SITENAME}}个一切贡献全必须徕$2下头发布，查$1望细节。
假使你侬弗想自己个文字遭到随意修改搭转发，覅提交上来。<br />
你侬也要向我里保证，箇是你侬自家写个，要勿从弗受版权保护个要勿差弗多个自由资源来。
'''覅徕朆获得授权个情况下发表！'''<br />",
'copyrightwarning2' => "请注意侬对{{SITENAME}}个所有贡献
侪可能畀别个贡献者编辑，修改或删除。
假使侬弗希望侬个文字畀任意修改搭仔再发布，请弗要提交。<br />
侬同时也要向我伲保证侬提交个内容是侬自家所作，或得自一个弗受版权保护或相似自由个来源（参阅$1个细节）。
''' 弗要垃拉弗曾获得授权个情况下头发表！'''",
'longpageerror' => "'''错误：侬提交个文本长度有$1KB，大于$2KB个顶大值。'''该文本弗能保存。",
'readonlywarning' => "'''警告：数据库锁定垃许维护，侬箇歇弗好保存侬个修改。'''侬作兴希望先拿本段文字复制并保存到文本文件，等歇再修改。

管理员有如下解释：$1",
'protectedpagewarning' => "'''警告：此页已经畀保护，只有拥有管理员权限个用户再好修改。'''
最近个日志垃拉下底提供以便参考：",
'semiprotectedpagewarning' => "'''注意：''' 本页面畀锁定，仅限注册用户编辑。
最近个日志垃拉下底提供以便参考：",
'cascadeprotectedwarning' => '警告：本页已经畀保护，只有拥有管理员权限个用户再好修改，因为本页已畀下底眼连锁保护个{{PLURAL:$1|一只|多只}}页面所包含：',
'titleprotectedwarning' => "'''警告：本页面已畀锁定，需要[[Special:ListGroupRights|指定权限]]方可创建。'''
最近个日志垃拉下底提供以便参考：",
'templatesused' => '箇页有{{PLURAL:$1|个模板}}：',
'templatesusedpreview' => '{{PLURAL:$1|只模板}}垃拉箇趟预览里向拨使用：',
'templatesusedsection' => '垃拉箇只段落里向使用个{{PLURAL:$1|模板|模板}}有：',
'template-protected' => '（保护）',
'template-semiprotected' => '（半保护牢）',
'hiddencategories' => '箇页属$1个隐藏分类个成员：',
'nocreatetext' => '{{SITENAME}}限制了创建新页面功能。侬可以返回并编辑已有个页面，或者[[Special:UserLogin|登录或创建新账户]]。',
'nocreate-loggedin' => '侬呒没权限创建新页面。',
'sectioneditnotsupported-title' => '段落编辑弗支持',
'sectioneditnotsupported-text' => '此页面弗支持编辑段落。',
'permissionserrors' => '权限错误',
'permissionserrorstext' => '为仔下头个{{PLURAL:$1|原因|原因}}咾侬无权进行箇只操作：',
'permissionserrorstext-withaction' => '下头个{{PLURAL:$1|原因|原因}}之故，你侬呒处进行$2操作：',
'recreate-moveddeleted-warn' => "'''警告: 你侬要转建一个之前删脱过个页面。'''

你侬应该要考虑考虑继续编箇页是否合适。
方便考虑，箇页个删记录提供到下头:",
'moveddeleted-notice' => '箇页删脱哉。
箇页个删搭移个日志徕下头提供以便参考。',
'log-fulllog' => '查看完整日志',
'edit-hook-aborted' => '编辑畀钩子取消。
渠弗曾畀出解释。',
'edit-gone-missing' => '弗好更新页面。
渠作兴齐巧畀删除。',
'edit-conflict' => '编辑冲突',
'edit-no-change' => '侬个编辑畀忽略，因为文本弗曾有改动。',
'edit-already-exists' => '弗好创建新页面。
已经有垃许。',

# Parser/template warnings
'expensive-parserfunction-warning' => '警告：箇只页面包含忒多占用资源个函数调用。

必须小于$2趟调用，现在有$1趟调用。',
'expensive-parserfunction-category' => '页面包含忒多耗费资源个函数调用',
'post-expand-template-inclusion-warning' => "'''警告：'''模板用忒多。
一星模板弗'''用'''。",
'post-expand-template-inclusion-category' => '模板用过量个页',
'post-expand-template-argument-warning' => '警告：箇只页面至少包含一只模参数，渠个扩展大小过大。
箇眼参数已经畀忽略。',
'post-expand-template-argument-category' => '包含忽略模板参数个页面',
'parser-template-loop-warning' => '检测着模板循环：[[$1]]',
'parser-template-recursion-depth-warning' => '模板递归深度超限（$1）',
'language-converter-depth-warning' => '字词转换器深度超限（$1）',

# "Undo" feature
'undo-success' => '箇只编辑可以撤销。
请检查下头个比较，确定侬确实想撤销，然后保存下底个更改完成撤销编辑。',
'undo-failure' => '由于相互冲突个中途编辑，箇只编辑弗好撤销。',
'undo-norev' => '由于其修订版本弗存在或已删除，此编辑弗好撤销。',
'undo-summary' => '撤销由[[Special:Contributions/$2|$2]]（[[User talk:$2|对话]]）作出个修订$1',

# Account creation failure
'cantcreateaccounttitle' => '呒处建立帐户',
'cantcreateaccount-text' => "从箇只IP地址 （<b>$1</b>） 创建账户已经畀[[User:$3|$3]]禁止。

$3封禁个原因是''$2''",

# History pages
'viewpagelogs' => '望箇页日志',
'nohistory' => '该只页面呒拨编辑历史。',
'currentrev' => '最新修订版本',
'currentrev-asof' => '于$1个最新修订版',
'revisionasof' => '垃拉$1所作出个修订版',
'revision-info' => '垃拉$1由$2所作修订版本',
'previousrevision' => '←还旧版',
'nextrevision' => '新点个版本→',
'currentrevisionlink' => '最新修订',
'cur' => '当前',
'next' => '后头',
'last' => '上个',
'page_first' => '最前',
'page_last' => '压末',
'histlegend' => '选择比较版本：标记要比较个两只版本，回车或者揿页面底里个揿钮。<br /> 图例：（当前） = 搭当前版本有啥两样， （上个） = 搭上个版本有啥两样，小 = 小改动。',
'history-fieldset-title' => '浏览页史',
'history-show-deleted' => '只准删脱个',
'histfirst' => '最老',
'histlast' => '最新',
'historysize' => '（$1字节）',
'historyempty' => '（空）',

# Revision feed
'history-feed-title' => '校订历史',
'history-feed-description' => 'wiki里向本页个修订历史',
'history-feed-item-nocomment' => '$1垃拉$2',
'history-feed-empty' => '请求个页面弗存在。渠作兴已畀删除或重命名。
尝试[[Special:Search|搜索本站]]获得相关新建页面。',

# Revision deletion
'rev-deleted-comment' => '（备注已删除）',
'rev-deleted-user' => '（用户名已删除）',
'rev-deleted-event' => '（日志动作已删除）',
'rev-deleted-user-contribs' => '[用户名或IP地址已删除 - 垃贡献里向囥脱编辑]',
'rev-deleted-text-permission' => "箇只页面修订已畀'''删除'''。
垃拉[{{fullurl:{{#Special:Log}}/delete|page={{PAGENAMEE}}}} 删除日志]里向可以寻着详细信息。",
'rev-deleted-text-unhide' => "箇只页面修订已经畀'''删除'''。
垃拉[{{fullurl:{{#Special:Log}}/delete|page={{PAGENAMEE}}}} 删除日志]里向可以寻着详细信息。
作为管理员，如果侬想继续个闲话，侬可以仍旧[$1 查看箇趟修订]。",
'rev-suppressed-text-unhide' => "箇只页面修订已经畀'''废止'''。
垃拉[{{fullurl:{{#Special:Log}}/suppress|page={{PAGENAMEE}}}} 废止日志]里向可以寻着详细信息。
作为管理员，如果侬想继续个闲话，侬可以仍旧[$1 查看箇趟修订]。",
'rev-deleted-text-view' => "箇只页面修订已经畀'''删除'''。作为管理员，侬可以查看渠；
垃拉[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} 删除日志]里向可以寻着详细信息。",
'rev-suppressed-text-view' => "箇只页面修订已经畀'''废止'''。作为管理员，侬可以查看渠；
垃拉[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} 废止日志]里向可以寻着详细信息。",
'rev-deleted-no-diff' => "因为其中一趟修订已畀'''删除'''，侬弗可以查看差异。
垃拉[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} 删除日志]里向可以寻着更多信息。",
'rev-suppressed-no-diff' => "箇只页面个其中一趟修订已经畀'''删除'''，箇咾弗可以查看箇趟修订。",
'rev-deleted-unhide-diff' => "箇只页面个其中一趟修订已经畀'''删除'''。
垃拉[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} 删除日志]里向可以寻着更多信息。
作为管理员，如果侬想继续个闲话，侬仍旧可以[$1 查看箇趟修订]。",
'rev-suppressed-unhide-diff' => "箇只页面个其中一趟修订已经拨'''废止'''。
垃拉[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} 废止日志]里向可以寻着更多资料。
作为管理员，如果侬想继续个闲话，侬可以仍旧[$1 查看箇趟修订]。",
'rev-deleted-diff-view' => "差异里向个一趟修订已拨'''删除'''。
作为管理员，侬可以查看箇个差异。详细信息可垃拉[{{fullurl: {{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} 删除日志]里向寻着。",
'rev-suppressed-diff-view' => "差异里向个一趟修订已拨'''废止'''。
作为管理员，侬可以查看箇个差异。详细信息可垃拉[{{fullurl: {{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} 废止日志]里向寻着。",
'rev-delundel' => '显示/囥脱',
'rev-showdeleted' => '显示',
'revisiondelete' => '删除 / 反删除修订',
'revdelete-nooldid-title' => '无效个目标修订',
'revdelete-nooldid-text' => '侬还弗曾指定一个目标修订去进行箇只功能、
所指定个修订弗存在，或者侬尝试去隐藏现时个修订。',
'revdelete-nologtype-title' => '呒没指定日志类型',
'revdelete-nologtype-text' => '侬还弗曾指定一种日志类型来进行箇只动作。',
'revdelete-nologid-title' => '无效日志记录',
'revdelete-nologid-text' => '侬还弗曾指定一只目标日志事件去进行箇只功能，或者指定个记录弗存在。',
'revdelete-no-file' => '指定文件弗存在。',
'revdelete-show-file-confirm' => '侬阿是真个要查看文件“<nowiki>$1</nowiki>”垃拉$2 $3已经删除个修订？',
'revdelete-show-file-submit' => '是',
'revdelete-selected' => "'''选取'''[[:$1]]'''个$2趟修订：'''",
'logdelete-selected' => "'''选取'''$1'''个日志事件：'''",
'revdelete-text' => "'''删脱个修订仍然将显示拉页面历史里向，不过渠拉个文本内容公众已经弗好访问。'''
垃拉{{SITENAME}}个其他管理员将仍旧好访问隐藏个内容并通过与此相同个界面恢复删除，除非站点工作者添加了附加限制。",
'revdelete-confirm' => '假使侬想箇能介做个闲话，请确认侬已经清爽箇能介做个后果，外加箇个程序符合[[{{MediaWiki:Policy-url}}|政策]]。',
'revdelete-suppress-text' => "'''只有'''出现下头眼情况再应阻止访问：
* 弗适合个个人信息
*: ''家庭地址、电话号码、身份证号码等。''",
'revdelete-legend' => '设置可见性之限制',
'revdelete-hide-text' => '隐藏修订文本',
'revdelete-hide-image' => '隐藏文件内容',
'revdelete-hide-name' => '隐藏动作搭仔目标',
'revdelete-hide-comment' => '隐藏编辑备注',
'revdelete-hide-user' => '隐藏编辑者个用户名/IP地址',
'revdelete-hide-restricted' => '同时阻止管理员与其他用户查看数据',
'revdelete-radio-same' => '(弗要更改)',
'revdelete-radio-set' => '是',
'revdelete-radio-unset' => '否',
'revdelete-suppress' => '同时阻止管理员与其他用户查看数据',
'revdelete-unsuppress' => '垃拉已恢复个修订里向移除限制',
'revdelete-log' => '理由：',
'revdelete-submit' => '应用于拣中个{{PLURAL:$1|修订}}',
'revdelete-success' => "'''修订个可见性已经成功更新。'''",
'revdelete-failure' => "'''修订个可见性无法更新：'''
$1",
'logdelete-success' => "'''事件个可见性已经成功设置。'''",
'logdelete-failure' => "'''事件个可见性无法设置：'''
$1",
'revdel-restore' => '改变可见性',
'revdel-restore-deleted' => '已删除个修订版本',
'revdel-restore-visible' => '可见个修订版本',
'pagehist' => '页面历史',
'deletedhist' => '已删除之历史',
'revdelete-hide-current' => '隐藏于$1 $2之项目错误：箇个是当前个修订，弗可以隐藏。',
'revdelete-show-no-access' => '显示于$1 $2之项目错误：箇只项目已经标示为"已限制"，侬对渠并无通行权。',
'revdelete-modify-no-access' => '更改于$1 $2之项目错误：箇个项目已经标示为"已限制"，侬对渠并无通行权。',
'revdelete-modify-missing' => '更改项目ID $1错误：数据库里寻弗着！',
'revdelete-no-change' => '警告：于$1 $2之项目已经请求仔可见性设置。',
'revdelete-concurrent-change' => '更改于$1 $2之项目错误：我伲尝试更改渠个设置个辰光，已经拨别人家更改过。请检查纪录。',
'revdelete-only-restricted' => '隐藏$1 $2个项目个辰光发生错误：侬弗好垃拉选择仔另一可见性选项后废止管理员查看该项目。',
'revdelete-reason-dropdown' => '*常用删除理由
** 侵犯版权
** 弗适合个个人资料',
'revdelete-otherreason' => '别个／附加理由：',
'revdelete-reasonotherlist' => '别个理由',
'revdelete-edit-reasonlist' => '编辑删除理由',
'revdelete-offender' => '修订作者：',

# Suppression log
'suppressionlog' => '阻止日志',
'suppressionlogtext' => '下头是只删除搭仔封锁列表，包括对管理员隐藏个内容。
参看[[Special:IPBlockList|IP封锁名单]]来了解目前有效个禁止搭仔封锁之名单。',

# History merging
'mergehistory' => '合并页面历史',
'mergehistory-header' => '箇只页面可以让侬拿来源页面个修订历史合并到新页面里向。
请确保此次更改能继续保持历史页面个连续性。',
'mergehistory-box' => '合并两只页面个修订历史：',
'mergehistory-from' => '来源页面：',
'mergehistory-into' => '目的页面：',
'mergehistory-list' => '可合并个编辑历史',
'mergehistory-merge' => '下头对[[:$1]]个修订可以合并到[[:$2]]。用该选项揿钮列去合并只有垃拉指定辰光前头创建个修订。要当心个是使用导航链接就会重设箇栏。',
'mergehistory-go' => '显示可合并个编辑',
'mergehistory-submit' => '合并修订',
'mergehistory-empty' => '呒没修订可以合并',
'mergehistory-success' => '[[:$1]]个$3趟修订已成功合并到[[:$2]]。',
'mergehistory-fail' => '弗可以进行历史合并，请重新检查页面以及辰光参数。',
'mergehistory-no-source' => '来源页面$1弗存在。',
'mergehistory-no-destination' => '目的页面$1弗存在。',
'mergehistory-invalid-source' => '来源页面必须是一个有效个标题。',
'mergehistory-invalid-destination' => '目的页面必须是一个有效个标题。',
'mergehistory-autocomment' => '已经拿[[:$1]]合并到[[:$2]]',
'mergehistory-comment' => '已经拿[[:$1]]合并到[[:$2]]：$3',
'mergehistory-same-destination' => '来源页面与目的页面弗可以相同',
'mergehistory-reason' => '理由：',

# Merge log
'mergelog' => '合并日志',
'pagemerge-logentry' => '已拿[[$1]]合并到[[$2]] （修订截至$3）',
'revertmerge' => '反合并',
'mergelogpagetext' => '下底是只最近发生个页面历史合并个记录列表。',

# Diffs
'history-title' => '“$1”个修订史',
'lineno' => '第$1排：',
'compareselectedversions' => '比较选中个版本',
'showhideselectedversions' => '显示／囥脱选定修订版本',
'editundo' => '撤销',
'diff-multi' => '（$2个用户个$1个中央版本朆显示。）',

# Search results
'searchresults' => '搜寻结果',
'searchresults-title' => '搜寻“$1”个结果',
'searchresulttext' => '更加全面个关于拉{{SITENAME}}里向搜索个信息，请倷看[[{{MediaWiki:Helppage}}:搜索|搜索{{SITENAME}}]]。',
'searchsubtitle' => '搜索\'\'\'[[:$1]]\'\'\'（[[Special:Prefixindex/$1|所有以 "$1" 打头个页面]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|所有链接到“$1”个页面]]）',
'searchsubtitleinvalid' => "倷搜寻 '''$1'''",
'toomanymatches' => '匹配结果忒多哉，请尝试弗同个查询关键词',
'titlematches' => '页面标题匹配',
'notitlematches' => '寻弗着匹配个页面标题',
'textmatches' => '页面内容匹配',
'notextmatches' => '呒没匹配个页面文本',
'prevn' => '上个 $1',
'nextn' => '下个 {{PLURAL:$1|$1}}',
'prevn-title' => '前$1个结果',
'nextn-title' => '后$1个结果',
'shown-title' => '一页显示$1个结果',
'viewprevnext' => '查看（$1 {{int:pipe-separator}} $2）（$3）',
'searchmenu-legend' => '搜索选项',
'searchmenu-exists' => "'''箇wiki里有一页名字“[[:$1]]”哉'''",
'searchmenu-new' => "'''徕箇wiki里建“[[:$1]]”页！'''",
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|浏览带箇只前缀个页面]]',
'searchprofile-articles' => '内容页',
'searchprofile-project' => '帮助搭项目页',
'searchprofile-images' => '多媒体',
'searchprofile-everything' => '全部',
'searchprofile-advanced' => '高级',
'searchprofile-articles-tooltip' => '徕$1里搜寻',
'searchprofile-project-tooltip' => '徕$1里搜寻',
'searchprofile-images-tooltip' => '搜寻文件',
'searchprofile-everything-tooltip' => '搜寻全部内容（包括讨论页）',
'searchprofile-advanced-tooltip' => '垃拉自定义名字空间里向搜索',
'search-result-size' => '$1（$2字）',
'search-result-category-size' => '$1个成员（$2个儿分类，$3个文件）',
'search-result-score' => '相关度：$1%',
'search-redirect' => '（转戳到 $1）',
'search-section' => '（段落 $1）',
'search-suggest' => '你侬是寻：$1',
'search-interwiki-caption' => '姊妹项目',
'search-interwiki-default' => '$1项结果：',
'search-interwiki-more' => '（更多）',
'search-relatedarticle' => '相关',
'mwsuggest-disable' => '禁用AJAX建议',
'searcheverything-enable' => '垃拉所有名字空间里向搜索',
'searchrelated' => '相关',
'searchall' => '全部',
'showingresults' => '下头显示从第<b>$2</b>条开始个<b>$1</b>条结果：',
'showingresultsnum' => '下头显示从第<b>$2</b>条开始个<b>$3</b>条结果：',
'showingresultsheader' => "对'''$4'''个{{PLURAL:$5|第'''$1'''至第'''$3'''项结果|第'''$1－$2'''项，共'''$3'''个结果}}",
'nonefound' => "'''注意'''：只默认搜索部分名字空间个页面。尝试垃拉侬个搜索语句前头添加“all:”前缀，箇能介好搜索全部页面（包括讨论页、模板咾啥），或者亦可使用所需名字空间作为前缀。",
'search-nonefound' => '查询呒有结果。',
'powersearch' => '高级搜索',
'powersearch-legend' => '高级搜索',
'powersearch-ns' => '垃拉箇眼名字空间里向搜索：',
'powersearch-redir' => '重定向列表',
'powersearch-field' => '搜索',
'powersearch-togglelabel' => '选择：',
'powersearch-toggleall' => '全选',
'powersearch-togglenone' => '侪弗选',
'search-external' => '外部搜索',
'searchdisabled' => '{{SITENAME}}个搜索已禁用。侬可以暂时使用Google搜索，须注意渠拉索引个{{SITENAME}}内容作兴会过时。',

# Preferences page
'preferences' => '偏好',
'mypreferences' => '偏好设定',
'prefs-edits' => '编辑数量：',
'changepassword' => '改密码',
'prefs-skin' => '皮肤',
'skin-preview' => '预览',
'datedefault' => '呒拨偏好',
'prefs-datetime' => '日脚搭仔辰光',
'prefs-personal' => '用户档案',
'prefs-rc' => '近段辰光个改动',
'prefs-watchlist' => '监控列表',
'prefs-watchlist-days' => '勒拉监控列表里向显示个日数：',
'prefs-watchlist-days-max' => 'Maximum $1 {{PLURAL:$1|day|days}}',
'prefs-watchlist-edits' => '勒拉扩展个监控列表里向显示个编辑趟数：',
'prefs-watchlist-edits-max' => '顶多：1000',
'prefs-watchlist-token' => '监控列表记认：',
'prefs-misc' => '杂项',
'prefs-resetpass' => '更改密码',
'prefs-email' => '邮箱选项',
'prefs-rendering' => '外观',
'saveprefs' => '保存',
'resetprefs' => '清除弗曾保存个更改',
'restoreprefs' => '复原全部默认设定',
'prefs-editing' => '编辑',
'rows' => '行：',
'columns' => '列：',
'searchresultshead' => '搜索',
'resultsperpage' => '每页显示链接数：',
'stub-threshold' => '<a href="#" class="stub">短页面链接</a>格式门槛值（字节）：',
'recentchangesdays' => '最近更改里向个显示日数：',
'recentchangesdays-max' => '最长 $1 日',
'recentchangescount' => '默认显示个编辑数：',
'prefs-help-recentchangescount' => '箇个包括近段辰光个改动、页面历史以及日志。',
'savedprefs' => '倷个偏好已经保存哉。',
'timezonelegend' => '时区：',
'localtime' => '当地辰光：',
'timezoneuseserverdefault' => '使用服务器默认值',
'timezoneuseoffset' => '其它（指定时差）',
'timezoneoffset' => '时差¹：',
'servertime' => '服务器辰光：',
'guesstimezone' => '从浏览器填写',
'timezoneregion-africa' => '非洲',
'timezoneregion-america' => '美洲',
'timezoneregion-antarctica' => '南极洲',
'timezoneregion-arctic' => '北极',
'timezoneregion-asia' => '亚洲',
'timezoneregion-atlantic' => '大西洋',
'timezoneregion-australia' => '澳洲',
'allowemail' => '接受别个用户个电子邮件',
'prefs-searchoptions' => '搜寻',
'prefs-namespaces' => '名字空间',
'default' => '默认',
'prefs-files' => '文件',
'youremail' => '电子信箱:',
'username' => '用户名:',
'uid' => '用户号：',
'yourrealname' => '真名字:',
'yourlanguage' => '语言:',
'yournick' => '绰号:',
'badsig' => '无效原始签名；检查 HTML 标签。',
'gender-unknown' => '我弗想講',
'gender-male' => '佢写Wiki',
'gender-female' => '"姖"写Wiki',
'email' => '电子邮件',
'prefs-help-email' => '电子信由你侬填弗填，转设密码用得着。',
'prefs-help-email-others' => '你侬也好来你侬个用户|讨论页里添加自己个电子信连接畀别人联系你用。
别人联系你是弗晓得你侬个电子信地址个。',
'prefs-help-email-required' => '需要电子邮件地址。',

# User rights
'userrights-user-editname' => '输入用户名:',

# Groups
'group-bot' => '机器人',
'group-sysop' => '管理员',
'group-bureaucrat' => '行政员',
'group-all' => '（全）',

'group-bot-member' => '机器人',
'group-sysop-member' => '管理员',
'group-bureaucrat-member' => '行政员',

'grouppage-bot' => '{{ns:project}}:机器人',
'grouppage-sysop' => '{{ns:project}}:管理员',
'grouppage-bureaucrat' => '{{ns:project}}:行政员',

# Rights
'right-read' => '閱讀頁面',
'right-edit' => '編頁面',
'right-createpage' => '做頁面（弗是討論頁面）',
'right-createtalk' => '做討論頁',
'right-createaccount' => '做新用戶帳號',
'right-minoredit' => '標記編寫是小編寫',
'right-move' => '移頁面',
'right-movefile' => '移文件',
'right-upload' => '傳文件',
'right-reupload' => '文件以舊換新',
'right-delete' => '刪頁面',
'right-browsearchive' => '搜尋已刪頁',
'right-viewmywatchlist' => '望自己個關注表',
'right-sendemail' => '發郵件畀各許人',

# Special:Log/newusers
'newuserlogpage' => '用户创建日志',

# User rights log
'rightslog' => '用户权限日志',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => '讀箇頁',
'action-edit' => '编箇页',
'action-createpage' => '做新頁',
'action-createtalk' => '做討論頁',
'action-minoredit' => '標小編寫',
'action-move' => '移箇頁',
'action-move-subpages' => '移箇頁搭兒頁',
'action-movefile' => '移箇文件',
'action-upload' => '傳箇文件',
'action-reupload' => '箇文件以舊換新',
'action-upload_by_url' => '從URL傳文件',
'action-delete' => '刪箇頁',
'action-deleterevision' => '刪箇版本',
'action-deletedhistory' => '望箇頁個刪史',
'action-browsearchive' => '尋已刪頁',
'action-undelete' => '弗刪箇頁',
'action-userrights' => '編全部用戶權',
'action-userrights-interwiki' => '編用戶徠各許維基個權',
'action-siteadmin' => '數據庫鎖牢要勿開鎖',
'action-sendemail' => '發郵件',
'action-editmywatchlist' => '編關注表',
'action-viewmywatchlist' => '望關注表',
'action-viewmyprivateinfo' => '望私人信息',
'action-editmyprivateinfo' => '編私人信息',

# Recent changes
'nchanges' => '$1趟更改',
'enhancedrc-history' => '歷史',
'recentchanges' => '箇阶段个变化',
'recentchanges-legend' => '箇阶段个变化选项',
'recentchanges-summary' => '登该个页面浪跟踪最近对维基百科个改动。',
'recentchanges-feed-description' => '跟踪此订阅垃拉 wiki 高头个最近更改。',
'recentchanges-label-newpage' => '建新页来编',
'recentchanges-label-minor' => '箇是小编写',
'rcnote' => "下底是垃拉$4 $5，最近'''$2'''日天里向个'''$1'''趟最近更改记录：",
'rclistfrom' => '显示 $1 以来个新改动',
'rcshowhideminor' => '$1小编写',
'rcshowhidebots' => '$1机器人',
'rcshowhideliu' => '$1登录个用户',
'rcshowhideanons' => '$1匿名用户',
'rcshowhidemine' => '$1我个修改',
'rclinks' => '显示来拉上个 $2 日里向个最近 $1 趟改动<br />$3',
'diff' => '两样',
'hist' => '历史',
'hide' => '囥脱',
'show' => '显示',
'minoreditletter' => '小',
'newpageletter' => '新',
'boteditletter' => '机',
'newsectionsummary' => '/* $1 */ 新段落',
'rc-enhanced-expand' => '显示细节',
'rc-enhanced-hide' => '畀细节囥脱',

# Recent changes linked
'recentchangeslinked' => '相关变化',
'recentchangeslinked-feed' => '搭界个改动',
'recentchangeslinked-toolbox' => '相关变化',
'recentchangeslinked-title' => '搭“$1”有关个改动',
'recentchangeslinked-summary' => "箇页列出个是对链到某只指定页面个页面近段辰光个修订（或者是对指定分类个成员）。
徕[[Special:Watchlist|你侬个关注表]]里个页用'''粗体'''显示。",
'recentchangeslinked-page' => '页面名称：',
'recentchangeslinked-to' => '显示链接到指定页面个页面个改动',

# Upload
'upload' => '上传文件',
'uploadbtn' => '上载文件',
'reuploaddesc' => '弗傳，轉到傳表單',
'uploadnologin' => '朆登录',
'uploadnologintext' => '倷板定要[[Special:UserLogin|登录]]仔再好上载文件。',
'uploaderror' => '上载出错',
'uploadtext' => "拿下头只表格来上载文件。要查看或者搜寻之前上载个图片个说法，请到[[Special:FileList|已上载文件列表]]，上载搭仔删脱也记录勒拉[[Special:Log/upload|上载日志]]里向。

要勒拉页面里向摆进图片个说法，用下头该种形式个链接
'''<nowiki>[[{{ns:file}}:文件.jpg]]</nowiki>'''，
'''<nowiki>[[{{ns:file}}:文件.png|替代文本]]</nowiki>''' 或者用
'''<nowiki>[[{{ns:media}}:文件.ogg]]</nowiki>''' 直接链到文件。",
'uploadlog' => '文件上载日志',
'uploadlogpage' => '文件上传日志',
'uploadlogpagetext' => '下底是最近上载文件列表。',
'filename' => '文件名',
'filedesc' => '小结',
'fileuploadsummary' => '小结:',
'filestatus' => '版权状态:',
'filesource' => '来源:',
'uploadedfiles' => '已经上载个文件',
'ignorewarning' => '弗管警告，随便哪亨要保存文件。',
'ignorewarnings' => '任何警告都弗管',
'minlength1' => '文件名至少一個字。',
'illegalfilename' => '“$1”文件名裏有嘸處當頁題目個字。文件名轉改再傳上來試試相。',
'filename-toolong' => '文件名嘸處比240字節長。',
'filename-tooshort' => '文件名忒短。',
'filetype-banned' => '弗準箇類型個文件。',
'illegal-filename' => '弗準箇文件名。',
'overwrite' => '弗準文件以舊換新。',
'unknown-error' => '弗識個錯誤發生。',
'tmp-create-error' => '臨時文件嘸處造。',
'tmp-write-error' => '寫臨時文件出錯。',
'large-file' => '文件名最好休要比$1長；
箇文件有$2。',
'largefileserver' => '箇文件比服務器配置個允許值大。',
'windows-nonascii-filename' => '箇wiki弗支持文件名用特別個字符。',
'uploadwarning' => '上载警告',
'savefile' => '保存文件',
'uploadedimage' => '上传 "[[$1]]"',
'sourcefilename' => '源文件:',
'destfilename' => '目标文件名:',
'watchthisupload' => '關注箇文件',
'upload-success-subj' => '上载成功哉',
'upload-failure-subj' => '傳個問題',
'upload-warning-subj' => '傳個警告',

'upload-misc-error' => '弗識個傳錯誤',
'upload-unknown-size' => '弗識大細',

# File backend
'backend-fail-delete' => '文件“$1”刪弗爻。',
'backend-fail-move' => '嘸處畀“$1”移到“$2”。',
'backend-fail-opentemp' => '臨時文件開弗爻。',
'backend-fail-writetemp' => '嘸處寫到臨時文件。',
'backend-fail-closetemp' => '嘸處關臨時文件',
'backend-fail-read' => '嘸處讀“$1”文件。',
'backend-fail-create' => '嘸處寫“$1”文件。',
'backend-fail-maxsize' => '嘸處寫"$1"文件，比{{PLURAL:$2|one byte|$2 bytes}}大之故。',

# Lock manager
'lockmanager-notlocked' => '“$1”朆鎖牢，嘸處開鎖。',

# img_auth script messages
'img-auth-nofile' => '“$1”文件嘸。',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL走弗進。',

# Special:ListFiles
'listfiles_search_for' => '寻图片名字:',
'imgfile' => '源文件',
'listfiles' => '文件列表',
'listfiles_date' => '日脚',
'listfiles_name' => '名字',
'listfiles_user' => '用户',
'listfiles_size' => '尺寸 （bytes）',
'listfiles_description' => '描述',
'listfiles-latestversion-yes' => '正是',
'listfiles-latestversion-no' => '弗是',

# File description page
'file-anchor-link' => '文件',
'filehist' => '文件历史',
'filehist-help' => '揿一个日脚／辰光来望当时出现过个文件。',
'filehist-deleteall' => '全删',
'filehist-deleteone' => '删',
'filehist-revert' => '恢复',
'filehist-current' => '当前',
'filehist-datetime' => '日脚 / 辰光',
'filehist-thumb' => '微缩图',
'filehist-thumbtext' => '于$1个缩图版本',
'filehist-user' => '用户',
'filehist-dimensions' => '维度',
'filehist-filesize' => '文件大細',
'filehist-comment' => '备注',
'imagelinks' => '文件用法',
'linkstoimage' => '下头$1个页面链到箇文件：',
'nolinkstoimage' => '呒有页链到箇文件。',
'linkstoimage-redirect' => '$1（文件轉戳到）$2',
'sharedupload' => '箇只文件来源于$1，渠作兴垃拉其它项目当中拨应用。',
'sharedupload-desc-here' => '箇文件$1里个，作兴会来别个项目里用。
渠个描述页里所描述个显示如下。',
'uploadnewversion-linktext' => '上载该文件个新版',

# File reversion
'filerevert' => '恢复$1',
'filerevert-legend' => '恢复文物',
'filerevert-comment' => '理由：',
'filerevert-submit' => '恢复',

# File deletion
'filedelete' => '删除$1',
'filedelete-legend' => '删除文物',
'filedelete-comment' => '理由：',
'filedelete-submit' => '删除',
'filedelete-reason-otherlist' => '別樣原因',
'filedelete-edit-reasonlist' => '編刪個原因',
'filedelete-maintenance-title' => '文件刪弗爻',

# MIME search
'download' => '下载',

# List redirects
'listredirects' => '重定向列表',

# Unused templates
'unusedtemplateswlh' => '別樣鏈接',

# Random page
'randompage' => '随便望望',

# Random page in category
'randomincategory' => '分類裏個隨便一頁',
'randomincategory-selectcategory-submit' => '去',

# Statistics
'statistics' => '统计',
'statistics-header-users' => '用户资料',
'statistics-users-active' => '活跃用户',

'pageswithprop-submit' => '去',

'brokenredirects' => '坏脱个重定向',
'brokenredirectstext' => '下向個轉戳鏈接到朆見個頁面：',
'brokenredirects-edit' => '编辑',
'brokenredirects-delete' => '删除',

'withoutinterwiki' => '嘸語言鏈接個頁面',
'withoutinterwiki-summary' => '下向許頁面朆鏈接到別樣語言版本。',

# Miscellaneous special pages
'nbytes' => '$1字节',
'nmembers' => '$1只成员',
'unusedimages' => '朆用着个文件',
'popularpages' => '热门页面',
'mostlinked' => '链进去顶多个页面',
'mostlinkedcategories' => '链进去顶多个分类',
'mostcategories' => '分类顶多个页面',
'mostimages' => '链进去顶多个图片',
'mostrevisions' => '修订过顶顶多趟数个页面',
'prefixindex' => '全部带前缀个页面',
'shortpages' => '短页面',
'longpages' => '长页面',
'protectedpages' => '已保护页面',
'protectedtitles' => '已保护个标题',
'listusers' => '用户列表',
'listusers-creationsort' => '照建個日子排',
'newpages' => '新页',
'newpages-username' => '用户名:',
'ancientpages' => '顶顶老个页面',
'move' => '移到',
'movethispage' => '捅该只页面',
'pager-newer-n' => '新$1次',
'pager-older-n' => '旧$1次',

# Book sources
'booksources' => '书源',
'booksources-search-legend' => '搜索图书来源',
'booksources-go' => '去',

# Special:Log
'specialloguserlabel' => '用戶：',
'speciallogtitlelabel' => '目標（標題要弗用戶）：',
'log' => '记录',

# Special:AllPages
'allpages' => '全部页面',
'alphaindexline' => '$1到$2',
'nextpage' => '下页 （$1）',
'prevpage' => '上一页（$1）',
'allpagesfrom' => '显示个页面开始于:',
'allpagesto' => '显示从此地结束个页面：',
'allarticles' => '全部页面',
'allinnamespace' => '所有页面 （$1 名字空间）',
'allnotinnamespace' => '全部页面 （弗勒 $1 名字空间里向）',
'allpagesprev' => '前头',
'allpagesnext' => '下底',
'allpagessubmit' => '提交',
'allpagesprefix' => '显示个页面有下底个前缀:',
'allpages-bad-ns' => '{{SITENAME}}没有叫做"$1"个名字空间.',

# Special:Categories
'categories' => '页面分类',

# Special:LinkSearch
'linksearch' => '外部链接',
'linksearch-ns' => '名字空間：',
'linksearch-ok' => '搜尋',
'linksearch-line' => '从$2链到$1',

# Special:ListUsers
'listusers-submit' => '显示',
'listusers-noresult' => '嘸箇用戶。',

# Special:ActiveUsers
'activeusers' => '活躍用戶表',

# Special:ListGroupRights
'listgrouprights-members' => '（成员列表）',

# Email user
'emailuser' => '发电子信畀箇个用户',
'emailuser-title-notarget' => '郵箱用戶',
'emailpage' => '郵箱用戶',
'emailfrom' => '從',
'emailto' => '發畀',
'emailsubject' => '主題',
'emailmessage' => '信息',
'emailsend' => '发罢',
'emailccme' => '我個信息發份畀我',
'emailsent' => '电子邮件发出去哉',
'emailsenttext' => '倷个电子邮件讯息已经拨发送哉。',

# Watchlist
'watchlist' => '關注表',
'mywatchlist' => '我个关注表',
'nowatchlist' => '倷个监控列表是空个。',
'watchnologin' => '朆登录',
'addedwatchtext' => '“[[:$1]]”箇頁加進爾個[[Special:Watchlist|關注表]]去哉。
轉日箇頁搭渠討論頁個變化會排箇耷。',
'removewatch' => '從關注表移爻',
'removedwatchtext' => '页面[[:$1]]已经从[[Special:Watchlist|侬个监控页面]]里向拿脱。',
'watch' => '关注',
'watchthispage' => '监控该只页面',
'unwatch' => '弗关注',
'unwatchthispage' => '停止监控',
'notanarticle' => '弗是內容頁',
'watchlist-details' => '弗包括讨论页，有 $1 页徕你侬关注表里向。',
'watchlistcontains' => '倷个监控列表包括{{PLURAL:$1|1|$1}}只页面。',
'wlshowlast' => '显示上 $1 个钟头 $2 日 $3',
'watchlist-options' => '监控列表选项',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => '监控……',
'unwatching' => '解除监控……',

'created' => '建立哉',
'changed' => '改变哉',

# Delete
'deletepage' => '删脱页面',
'confirm' => '确认',
'historywarning' => '警告：倷要删脱个该只页面有历史：',
'confirmdeletetext' => '侬即将删除一只页面或图像以及其历史。
请确定侬要进行此项操作，并且了解其后果，同时侬个行为符合[[{{MediaWiki:Policy-url}}|the policy]]。',
'actioncomplete' => '操作完成哉',
'deletedtext' => '"$1"已经删除。最近删除记录请参见$2。',
'dellogpage' => '删除记录',
'deletionlog' => '删除记录',
'deletecomment' => '理由:',
'deleteotherreason' => '其它／附加理由：',
'deletereasonotherlist' => '别个理由',

# Rollback
'rollback' => '恢复编辑',
'rollback_short' => '恢复',
'rollbacklink' => '回退',
'rollbackfailed' => '恢复失败',
'revertpage' => '恢复[[Special:Contributions/$2|$2]] （[[User talk:$2|讲张]]）个改动；恢复到[[User:$1|$1]]个上一版本',

# Protect
'protectlogpage' => '保护日志',
'protectedarticle' => '已保护“[[$1]]”',
'modifiedarticleprotection' => '“[[$1]]”个保护等级改好哉',
'prot_1movedto2' => '[[$1]]捅到[[$2]]',
'protectcomment' => '理由:',
'protectexpiry' => '到期：',
'protect_expiry_invalid' => '到期辰光无效。',
'protect_expiry_old' => '到期辰光已经过去哉。',
'protect-text' => '侬好垃拉此地浏览搭仔修改页面<strong>$1</strong>个保护级别。',
'protect-locked-access' => '侬个账户权限弗好修改保护级别。
下底是<strong>$1</strong>箇歇个保护级别：',
'protect-cascadeon' => '下底个{{PLURAL:$1|一只|多只}}页面包含 本页面个同时，启动了连锁保护，因此本页面目前也拨保护拉许，弗好编辑。侬可以设置本页面个保护级别，但箇个并弗会对连锁保护有所影响。',
'protect-default' => '允许所有用户',
'protect-fallback' => '需要“$1”个许可',
'protect-level-autoconfirmed' => '弗准新用戶搭還朆註冊個用戶',
'protect-level-sysop' => '只准管理員',
'protect-summary-cascade' => '联锁',
'protect-expiring' => '终止于$1（UTC）',
'protect-cascade' => '保护本页里向包含个页面（连锁保护）',
'protect-cantedit' => '侬呒此更改迭只页面个保护等级，因为侬呒没权限编辑渠。',
'protect-othertime' => '各許時間：',
'protect-othertime-op' => '各許時間',
'protect-otherreason-op' => '各許原因',
'restriction-type' => '权限：',
'restriction-level' => '限制级别：',
'minimum-size' => '最小大細',
'maximum-size' => '最大大細',

# Restrictions (nouns)
'restriction-edit' => '编辑',
'restriction-move' => '捅荡',

# Undelete
'undeletepage' => '查看搭仔恢复删脱个页面',
'viewdeletedpage' => '望望相删脱个页面',
'undeletelink' => '查看／恢复',
'undeleteviewlink' => '望',
'undeletereset' => '轉設',
'undeletecomment' => '理由：',
'undelete-search-submit' => '搜尋',

# Namespace form on various pages
'namespace' => '名字空间:',
'invert' => '反选择',
'blanknamespace' => '（主）',

# Contributions
'contributions' => '用户贡献',
'contributions-title' => '$1个贡献',
'mycontris' => '我个贡献',
'contribsub2' => '$1个贡献（$2）',
'uctop' => '（此垡）',
'month' => '从箇月起 （要勿还要早）：',
'year' => '从箇年起 （要勿还要早）：',

'sp-contributions-newbies' => '只显示新用户个贡献',
'sp-contributions-blocklog' => '查封记录',
'sp-contributions-talk' => '討論',
'sp-contributions-search' => '搜寻贡献记录',
'sp-contributions-username' => 'IP地址要勿用户名：',
'sp-contributions-submit' => '搜寻',

# What links here
'whatlinkshere' => '有啥链到箇里',
'whatlinkshere-title' => '链接到“$1”个页面',
'whatlinkshere-page' => '页面：',
'linkshere' => '下头个页链到[[:$1]]：',
'nolinkshere' => "呒有页链到 '''[[:$1]]'''。",
'isredirect' => '转戳页',
'istemplate' => '包含',
'isimage' => '文件鏈接',
'whatlinkshere-prev' => '前$1个',
'whatlinkshere-next' => '后$1个',
'whatlinkshere-links' => '←链进',
'whatlinkshere-hideredirs' => '$1转戳',
'whatlinkshere-hidetrans' => '$1包含',
'whatlinkshere-hidelinks' => '$1链接',
'whatlinkshere-filters' => '过滤器',

# Block/unblock
'blockip' => '查封用户',
'ipadressorusername' => 'IP地址或用户名：',
'ipbreason' => '理由:',
'ipbreasonotherlist' => '其它原因',
'ipbsubmit' => '封杀该个用户',
'ipbother' => '其它时间：',
'ipboptions' => '2个钟头:2 hours,1日:1 day,3日:3 days,1个礼拜:1 week,2个礼拜:2 weeks,1个月日:1 month,3个月日:3 months,6个月日:6 months,1年:1 year,老世:infinite',
'badipaddress' => '无效 IP 地址',
'ipblocklist' => '封脱个用户',
'infiniteblock' => '永远',
'blocklink' => '封禁',
'unblocklink' => '解封',
'change-blocklink' => '改变封禁',
'contribslink' => '贡献',
'blocklogpage' => '封禁日志',
'blocklogentry' => '“[[$1]]”查封徕里，$2 $3到期',
'blocklogtext' => '箇是用戶封搭解封操作個記錄。自動封個IP地址弗排。到[[Special:BlockList|IP 封表]]裏望目前生效個封表。',
'unblocklogentry' => '$1已经拨解封',
'block-log-flags-nocreate' => '建账号禁用哉',

# Developer tools
'lockdb' => '鎖數據庫',
'unlockdb' => '開鎖數據庫',
'lockbtn' => '鎖數據庫',
'unlockbtn' => '數據庫開鎖',
'databasenotlocked' => '數據庫朆鎖牢。',

# Move page
'move-page-legend' => '页面捅荡',
'movepagetext' => "用下底個表會轉名字一張頁面，全部歷史都移到新名字裏。
老個名字會變成戳到新名字個轉戳頁。
到旧页面个连接弗会改变；注意检查双重定向或者坏脱个重定向。
倷有实概个责任，即连接原要连到俚笃应该连到个场呵去。

注意，如果新名字归面搭已经有页面个说话，老名字个页面'''弗'''会拨移动，除非归个是只空页面或者是只重定向并且呒拨编辑历史。个也就是讲，假使倷犯错误个说话，倷好拿一只重命名过个页面还原到原来个名字，但倷弗好覆盖一只已经来浪个页面。

<b>警告！</b>
箇嘸數會有名氣個引起对一只热门页面剧烈个、想弗着个改变。
来操作前头请倷确定倷已经充分了解个能做法个后果。",
'movepagetalktext' => "相关讨论页将自动搭该页面一淘移动，'''除非''':
*新页面已经有仔一只非空个讨论页，或者
*侬弗勾选下头个复选框。

垃拉箇星情况下头，侬必须手工移动或合并页面。",
'movearticle' => '页面移动:',
'movenologin' => '朆登录',
'movenologintext' => '倷板定要是已登记用户且勒拉[[Special:UserLogin|登录]]状态下头再好拿页面捅荡。',
'newtitle' => '新标题:',
'move-watch' => '监控来源以及目标页',
'movepagebtn' => '页面移动',
'pagemovedsub' => '移动成功',
'movepage-moved' => "'''“$1”已经移动到“$2”'''",
'articleexists' => '叫箇只名字个页面已经有垃许哉，要么侬拣个名字是无效个。请重新拣只名字。',
'cantmove-titleprotected' => '侬弗可以移动迭个页面到个个位置，因为迭个新标题已经拨保护拉许以防止创建。',
'talkexists' => '页面本身移动成功，
但是由于新标题下已经有对话页存在，所以对话页无法移动。请手工合并两只页面。',
'movedto' => '移动到',
'movetalk' => '移动相关讨论页',
'movelogpage' => '移个记录',
'movelogpagetext' => '下底是拨拉捅荡个页面列表。',
'movereason' => '理由:',
'revertmove' => '恢复',
'delete_and_move' => '删脱搭仔捅荡',
'delete_and_move_confirm' => '对哉，删脱该只页面',

# Export
'export' => '页导出',

# Namespace 8 related
'allmessages' => '系统讯息',
'allmessagesname' => '名字',
'allmessagesdefault' => '默认文本',
'allmessagescurrent' => '当前文本',
'allmessagestext' => '该个是MediaWiki名字空间里可用个系统音讯列表。',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' 呒处显示，因为 '''\$wgUseDatabaseMessages''' 关勒浪。",

# Thumbnails
'thumbnail-more' => '放大',
'filemissing' => '文件寻弗着哉',

# Tooltip help for the actions
'tooltip-pt-userpage' => '你侬个用户页',
'tooltip-pt-mytalk' => '你侬个讨论页',
'tooltip-pt-preferences' => '我欢喜个',
'tooltip-pt-watchlist' => '监控修改页面列表',
'tooltip-pt-mycontris' => '你侬个贡献列表',
'tooltip-pt-login' => '鼓励大家登录进来，不过也弗是板定要求',
'tooltip-pt-anonlogin' => '鼓励登录，必过倒也弗是必须个。',
'tooltip-pt-logout' => '登出',
'tooltip-ca-talk' => '讨论内容页',
'tooltip-ca-edit' => '箇页你侬好编。保存之前望望相起。',
'tooltip-ca-addsection' => '开始新段',
'tooltip-ca-viewsource' => '箇页受保，你侬好望源代码',
'tooltip-ca-history' => '箇页以早个版本',
'tooltip-ca-protect' => '保护箇页',
'tooltip-ca-delete' => '删脱箇页',
'tooltip-ca-move' => '移箇页',
'tooltip-ca-watch' => '畀箇页加进你侬个关注表里',
'tooltip-ca-unwatch' => '畀箇页从关注表里删脱',
'tooltip-search' => '搜寻{{SITENAME}}',
'tooltip-search-go' => '转到页本确切名称，如果存在',
'tooltip-search-fulltext' => '搜寻包含箇星文本个页面',
'tooltip-p-logo' => '封面',
'tooltip-n-mainpage' => '翻到封面',
'tooltip-n-mainpage-description' => '翻到封面',
'tooltip-n-portal' => '有关箇计划，啥好做，应该哪能做',
'tooltip-n-currentevents' => '查寻当前事件个背景信息',
'tooltip-n-recentchanges' => '列出wiki里箇阶段个变化',
'tooltip-n-randompage' => '打开随机页面',
'tooltip-n-help' => '寻求帮助',
'tooltip-t-whatlinkshere' => '列出全部搭箇页链个页',
'tooltip-t-recentchangeslinked' => '箇页链出去个全部页箇阶段变化',
'tooltip-feed-rss' => '订阅本页',
'tooltip-feed-atom' => '此页个Atom 订阅',
'tooltip-t-contributions' => '查看箇位用户个贡献',
'tooltip-t-emailuser' => '发电子信畀箇个用户',
'tooltip-t-upload' => '上传文件',
'tooltip-t-specialpages' => '全部特殊页列表',
'tooltip-t-print' => '箇页个打印版',
'tooltip-t-permalink' => '箇页当前修订版个老世链接',
'tooltip-ca-nstab-main' => '望内容页',
'tooltip-ca-nstab-user' => '查看用户页',
'tooltip-ca-nstab-media' => '查看媒体页',
'tooltip-ca-nstab-special' => '箇是特殊页，你侬呒处编',
'tooltip-ca-nstab-project' => '望项目页',
'tooltip-ca-nstab-image' => '望文件页',
'tooltip-ca-nstab-mediawiki' => '查看系统讯息',
'tooltip-ca-nstab-template' => '望模板',
'tooltip-ca-nstab-help' => '查看帮忙页面',
'tooltip-ca-nstab-category' => '望分类页',
'tooltip-minoredit' => '标作小编写',
'tooltip-save' => '保存你侬个修改',
'tooltip-preview' => '望望相你侬个修改，保存之前用!',
'tooltip-diff' => '显示你侬对文本个修改',
'tooltip-compareselectedversions' => '查看本页面两只选定个修订版个差异。',
'tooltip-watch' => '畀箇页加到你侬个关注表里',
'tooltip-rollback' => '揿一记“回转”就回退到上一位贡献者个编辑状态',
'tooltip-undo' => '“撤销”可以恢复该编辑并且垃拉预览模式下头打开编辑表单。渠允许垃拉摘要里向说明原因。',
'tooltip-summary' => '打进短摘要',
'interlanguage-link-title' => '̩$1 - $2',

# Attribution
'anonymous' => '{{SITENAME}}浪个匿名用户',

# Image deletion
'deletedrevision' => '拨删脱个旧修订 $1',

# Browsing diffs
'previousdiff' => '←老版',
'nextdiff' => '新版→',

# Media information
'file-info-size' => '$1×$2像素，文件大小：$3，MIME类型：$4',
'file-nohires' => '无更高分辨率可提供。',
'svg-long-desc' => 'SVG文件，名义大小：$1×$2像素，文件大小：$3',
'show-big-image' => '完整分辨率',

# Special:NewFiles
'newimages' => '新文件陈列室',
'showhidebots' => '（$1机器人）',
'ilsubmit' => '搜寻',

# Bad image list
'bad_image_list' => '格式如下：

只列出项目（线开始* ）的审议。
第一个环节上线必须是一个链接到一个坏文件。
其后的任何链接在同一行被认为是例外情况，即网页的文件，则可能会发生内部。',

/*
Short names for language variants used for language conversion links.
Variants for Chinese language
*/
'variantname-zh-tw' => '台湾',

# Metadata
'metadata' => '元数据',
'metadata-help' => '箇只文件里向包含有扩展个信息。箇些信息可能是由数码相机或扫描仪垃拉创建或数字化过程中所添加个。

如果此文件个源文件已经修改，一些信息垃拉修改后个文件里向将弗能完全反映出来。',
'metadata-expand' => '显示详细资料',
'metadata-collapse' => '隐藏详细资料',
'metadata-fields' => '垃拉本信息里向所列出个 EXIF 元数据域包含垃拉图片显示页面,
当元数据表损坏个辰光只显示下头眼信息，别个元数据默认为隐藏。
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-artist' => '作者',

'exif-componentsconfiguration-0' => '弗存在',

'exif-subjectdistance-value' => '$1米',

'exif-contrast-2' => '高',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => '公里每小时',
'exif-gpsspeed-m' => '英里每小时',

# External editor support
'edit-externally' => '用外部应用程序来编辑该只文件',
'edit-externally-help' => '（请参见[https://www.mediawiki.org/wiki/Manual:External_editors 设置步骤]了解详细信息）',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => '全部',
'namespacesall' => '全部',
'monthsall' => '全',

# Email address confirmation
'confirmemail' => '确认电子邮件地址',
'confirmemail_text' => '该只wiki要求倷来拉用电子邮件服务之前验证电子邮件地址个有效性。揿底下只揿钮来发封确认信到倷电子邮箱。个封信里会有加密个链接。登倷个浏览器里向打开该只链接，确认倷个电子邮箱地址是有效个。',
'confirmemail_send' => '发送确认码',
'confirmemail_sent' => '确认电子邮件发出去哉。',
'confirmemail_success' => '倷个电子邮箱地址已经通过确认哉。乃么倷好登录，享受倪维基百科哉。',
'confirmemail_loggedin' => '倷个电子邮件地址已经拨确认哉。',
'confirmemail_subject' => '{{SITENAME}}电子邮件地址确认',
'confirmemail_body' => '用IP地址$1嗰人（呒数是你侬），徕translatewiki.net里一个账号“$2”建起，用你侬个电子信箱地址。

确认记箇账号是弗是你侬嘅，激活translatewiki.net里嗰电子信功能。用浏览器打开下向嗰链接：

$3

假使你侬*朆*注册过箇账号，揿下向嗰链接取消电子信确认：

$5

确认码会到$4过期。',
'confirmemail_body_changed' => '用IP地址$1嗰人，（呒数是你侬）徕{{SITENAME}}里一个账号“$2”建起，用你侬个电子信箱地址。

确认记箇账号是弗是你侬嘅，激活{{SITENAME}}里嗰电子信功能。用浏览器打开下向嗰链接：

$3

假使你侬*朆*注册过箇账号，揿下向嗰链接取消电子信确认：

$5

确认码会到$4过期。',

# Scary transclusion
'scarytranscludetoolong' => '[对呒起，URL太长了]',

# Delete conflict
'confirmrecreate' => "用户[[User:$1|$1]] （[[User talk:$1|讲张]]）勒拉倷开始编辑该页面之后拿俚删脱，理由是： : ''$2'' 请拿定章程，倷阿是真个要重建该页面。",

# action=purge
'confirm_purge_button' => '确定',

# Separators for various lists, etc.
'comma-separator' => '、',
'parentheses' => '（$1）',

# Multipage image navigation
'imgmultipageprev' => '← 上一页',
'imgmultipagenext' => '下一页 →',

# Table pager
'ascending_abbrev' => '升序',
'descending_abbrev' => '降序',
'table_pager_next' => '下页',
'table_pager_prev' => '上页',
'table_pager_first' => '头一页',
'table_pager_last' => '压末一页',
'table_pager_limit' => '显示 $1 条每页',

# Auto-summaries
'autoredircomment' => '重定向到 [[$1]]',
'autosumm-new' => '新页面：$1',

# Watchlist editor
'watchlistedit-normal-title' => '编辑监视列表',

# Watchlist editing tools
'watchlisttools-view' => '望相关修改',
'watchlisttools-edit' => '望搭编关注表',
'watchlisttools-raw' => '编写原始关注表',

# Special:Version
'version' => '版本',

# Special:SpecialPages
'specialpages' => '特殊页',

# Special:Tags
'tags-active-yes' => '好',
'tags-active-no' => '弗',

# Database error messages
'dberr-info-hidden' => '（數據庫服務器連弗上）',

# New logging system
'revdelete-restricted' => '已将限制应用到管理员',
'revdelete-unrestricted' => '已移除对管理员个限制',
'rightsnone' => '（呒）',

);
