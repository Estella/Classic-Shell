<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">

<!-- Mirrored from www.classicshell.net/forum/posting.php?mode=quote&f=20&p=27765 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 09:56:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<title>Classic Shell &bull; Login</title>

<link rel="alternate" type="application/atom+xml" title="Feed - Classic Shell" href="feed.php" /><link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="feed9d17.php?mode=topics" />

<link rel="stylesheet" href="styles/subsilver2/theme/stylesheet.css" type="text/css" />

<script type="text/javascript">
// <![CDATA[


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Enter the page number you wish to go to:', '');
	var per_page = '';
	var base_url = '';

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}



// ]]>
</script>
<style>
.menu {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #D9F1FA;
	text-decoration: none;
	white-space: nowrap;
}
a.menu {
	text-decoration: none;
	color: #D9F1FA;
}
a.menu:hover {
	color: #D9F1FA;
	text-decoration: underline;
}
a.menu:visited {
	color: #D9F1FA;
	text-decoration: underline;
}
td.menu {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	padding: 0px;
}
.title {
	font-family: Arial;
	font-size: 32px;
	font-weight: bold;
	margin: 0px 0px 0px 0px;
	color: #0E4687;
}
.cpr {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
	white-space: nowrap;
}
.bgrx {
	background-repeat: repeat-x;
}
td.cpr a {
	text-decoration: none;
	color: #D9F1FA !important;
}
td.cpr a:hover {
	color: #D9F1FA;
	text-decoration: underline;
}
td.cpr a:visited {
	color: #D9F1FA;
	text-decoration: underline;
}

</style>
</head>
<body class="ltr">

<a name="top"></a>

<div id="wrapheader">
<table border="0" cellpadding="0" cellspacing="0" height="123px" width="100%">

		<tr>
  <td background="../images/bg_head.png" height="1" class="menu">
    <table style="width: 100%; height: 123px;" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width: 179px; text-align: center;" class="menu"><img src="../images/corner.png" style="width: 179px; height: 129px;" alt=""><br>
        </td>
        <td class="menu">
          <table style="width: 100%; height: 81px;" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="vertical-align: middle; width: 600px; height: 101px;" class="menu">

                <h1 class="title" style="margin-top: 20px; height: 65px; vertical-align: middle;">

<!-- Caption -->

Classic Shell: Forum

                </h1>
              </td>
              <td style="width: 447px; height: 101px;" class="menu"><br>
              </td>
		</tr>
            <tr>
              <td height="28px" colspan="2" background="../images/bg_menu.png" class="menu">
                <table height="25px"  border="0" cellpadding="0" cellspacing="0">
                  <tr>

<!-- Start Navigation -->

<td class="menu" align="center"><a href="http://www.classicshell.net/" class="menu">HOME</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/forum" class="menu">FORUM</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/faq" class="menu">F.A.Q.</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/gallery" class="menu">SCREENSHOTS</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/translations" class="menu">TRANSLATIONS</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/downloads" class="menu">ALL DOWNLOADS</a></td>


<!-- End Navigation -->


                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>
	<div id="menubar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="genmed">
				<a href="ucp26c3.html?mode=login"><img src="styles/subsilver2/theme/images/icon_mini_login.gif" width="12" height="13" alt="*" /> Login</a>&nbsp; &nbsp;<a href="ucp8319.html?mode=register"><img src="styles/subsilver2/theme/images/icon_mini_register.gif" width="12" height="13" alt="*" /> Register</a>
					
			</td>
			<td class="genmed" align="right">
				<a href="faq.html"><img src="styles/subsilver2/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
				&nbsp; &nbsp;<a href="search.html"><img src="styles/subsilver2/theme/images/icon_mini_search.gif" width="12" height="13" alt="*" /> Search</a>&nbsp; &nbsp;<a href="memberlist.html"><img src="styles/subsilver2/theme/images/icon_mini_members.gif" width="12" height="13" alt="*" /> Members</a>
			</td>
		</tr>
		</table>
	</div>

	<div id="datebar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="gensmall"></td>
			<td class="gensmall" align="right">It is currently Thu Jun 07, 2018 10:34 pm<br /></td>
		</tr>
		</table>
	</div>

</div>

<div id="wrapcentre">

	
	<p class="searchbar" style="line-height:1.3">
		<span style="float: left;"><a href="search4d23.html?search_id=unsolved_topics">View unsolved topics</a><br /><a href="search33a7.html?search_id=unanswered">View unanswered posts</a> | <a href="search526f.html?search_id=active_topics">View active topics</a></span>
		
	</p>
	

	<br style="clear: both;" />

	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index-2.html">Board index</a></p>
			<p class="datetime">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>

	<br />

<form action="http://www.classicshell.net/forum/ucp.php?mode=login" method="post">

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	
		<th colspan="2">Login</th>
	
</tr>

	<tr>
		<td class="row3" colspan="2" align="center"><span class="gensmall">You need to login in order to quote posts within this forum.</span></td>
	</tr>

<tr>
	<td class="row1" width="50%">
		<p class="genmed">In order to login you must be registered. Registering takes only a few moments but gives you increased capabilities. The board administrator may also grant additional permissions to registered users. Before you register please ensure you are familiar with our terms of use and related policies. Please ensure you read any forum rules as you navigate around the board.</p>

		<p class="genmed" align="center">
			<a href="ucp226b.html?mode=terms">Terms of use</a> | <a href="ucp4d86.html?mode=privacy">Privacy policy</a>
		</p>
	</td>
	
	<td class="row2">
	
		<table align="center" cellspacing="1" cellpadding="4" style="width: 100%;">
		

		<tr>
			<td valign="top" ><b class="gensmall">Username:</b></td>
			<td><input class="post" type="text" name="username" size="25" value="" tabindex="1" />
				
					<br /><a class="gensmall" href="ucp8319.html?mode=register">Register</a>
				
			</td>
		</tr>
		<tr>
			<td valign="top" ><b class="gensmall">Password:</b></td>
			<td>
				<input class="post" type="password" name="password" size="25" tabindex="2" />
				<br /><a class="gensmall" href="ucp937e.html?mode=sendpassword">I forgot my password</a><br /><a class="gensmall" href="ucpc2e8.html?mode=resend_act">Resend activation e-mail</a>
			</td>
		</tr>
		
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" class="radio" name="autologin" tabindex="3" /> <span class="gensmall">Log me on automatically each visit</span></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" class="radio" name="viewonline" tabindex="4" /> <span class="gensmall">Hide my online status this session</span></td>
			</tr>
		
		</table>
	</td>
</tr>



<input type="hidden" name="redirect" value="posting1e8f.php?mode=quote&amp;f=20&amp;p=27765" />

<tr>
	<td class="cat" colspan="2" align="center"><input type="hidden" name="sid" value="d56691c512bc63226fccc9ff0fe561f1" />
<input type="submit" name="login" class="btnmain" value="Login" tabindex="5" /></td>
</tr>
</table>

</form>

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index-2.html">Board index</a></p>
			<p class="datetime">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>

<br clear="all" />

<div align="right">
	<form method="post" name="jumpbox" action="http://www.classicshell.net/forum/viewforum.php" onsubmit="if(document.jumpbox.f.value == -1){return false;}">

	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:</span>&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">

		
			<option value="-1">Select a forum</option>
		<option value="-1">------------------</option>
			<option value="3">Classic Shell</option>
		
			<option value="4">&nbsp; &nbsp;Announcements</option>
		
			<option value="5">&nbsp; &nbsp;Tutorials</option>
		
			<option value="6">Discussion</option>
		
			<option value="7">&nbsp; &nbsp;Classic Start Menu</option>
		
			<option value="8">&nbsp; &nbsp;Classic Explorer</option>
		
			<option value="9">&nbsp; &nbsp;Classic IE</option>
		
			<option value="10">&nbsp; &nbsp;Chitchat</option>
		
			<option value="19">&nbsp; &nbsp;Classic Shell 4.0 beta</option>
		
			<option value="22">&nbsp; &nbsp;Hack hotline</option>
		
			<option value="11">Development</option>
		
			<option value="12">&nbsp; &nbsp;Bug Reports</option>
		
			<option value="13">&nbsp; &nbsp;Feature Requests</option>
		
			<option value="20">&nbsp; &nbsp;Translations</option>
		
			<option value="16">User Content</option>
		
			<option value="17">&nbsp; &nbsp;Start Menu Skins</option>
		
			<option value="18">&nbsp; &nbsp;Start Buttons</option>
		
			<option value="21">&nbsp; &nbsp;Taskbar Skins</option>
		

		</select>&nbsp;<input class="btnlite" type="submit" value="Go" /></td>
	</tr>
	</table>

	</form>
</div>

<script type="text/javascript">
// <![CDATA[
	(function()
	{
		var elements = document.getElementsByName("username");
		for (var i = 0; i < elements.length; ++i)
		{
			if (elements[i].tagName.toLowerCase() == 'input')
			{
				elements[i].focus();
				break;
			}
		}
	})();
// ]]>
</script>

<img src="cronb8fa.gif?cron_type=tidy_warnings" width="1" height="1" alt="cron" />
</div>

<div id="wrapfooter">
	
	<span class="copyright">
	</span>
<table style="width: 100%" border="0" cellpadding="0" cellspacing="0">
      <td class="bgrx" background="../images/bg_bottom.gif" bgcolor="#88cce6" height="1">
      <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td style="padding: 0" colspan="4" height="8"><img src="../images/spacer.gif" height="8" width="1"></td>
          </tr>
          <tr>
            <td style="padding: 0" width="21"><img src="../images/spacer.gif" height="1" width="21"></td>
            <td style="padding: 0; text-align: left" class="cpr" width="50%">
            Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Group, Almsamim WYSIWYG
            </td>
            <td style="padding: 0; text-align: right" class="cpr" width="50%">
            Classic Shell &copy; 2010-2016, Ivo Beltchev.<br>All right reserved.
            </td>
            <td style="padding: 0" width="21"><img src="../images/spacer.gif" height="1" width="21"></td>
          </tr>
          <tr>
            <td style="padding: 0" colspan="4" height="7"><img src="../images/spacer.gif" height="7" width="1"></td>
          </tr>
      </table>
      </td>
    </tr>
</table>
</div>

</body>

<!-- Mirrored from www.classicshell.net/forum/posting.php?mode=quote&f=20&p=27765 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 09:56:37 GMT -->
</html>