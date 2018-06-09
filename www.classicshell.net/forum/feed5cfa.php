<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=6220" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-06-16T08:36:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=6220</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-06-16T08:36:20-07:00</updated>
<published>2016-06-16T08:36:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6220&amp;p=27212#p27212</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6220&amp;p=27212#p27212"/>
<title type="html"><![CDATA[Experiment to add CUSTOM TEXT COLOR to other skins  7 style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6220&amp;p=27212#p27212"><![CDATA[
Changing text color in a Windows 7 style skin ( .skin7 )<br /><br />Here is an example of Ivo's text script in a skin, that can be seen and modified with free Resource Hacker program.<br /><br />; Main_text_color - 4 colors for the text in the main menu. <br />; color 1 is for normal menu items<br />; color 2 is for selected menu items<br />; color 3 is for disabled menu items<br />; color 4 is for selected disabled menu items<br /><br />Main_text_color=#FFFFFF,#FFFFFF,#7F7F7F,#7F7F7F<br /><br />The &quot;Main&quot; text is just one of the many locations for text color. Those first 2 hex colors ( #FFFFFF ), <br />are the colors we see most of the time.<br />You can use Resource hacker to alter the hex number color.<br /><br /><br />Now a new way.<br />In new 4.2.7 beta, Ivo has made a &quot;Metallic&quot; skin with easy user selectable text color for left and right columns.<br />I was playing around with it in another skin &quot;Metro-Win10-Black.skin7&quot; by mrbumpy409 <br />I don't know if this is the correct way of putting in &quot;custom text color &quot; in another skin,<br />but hey, if one does not try anything, one will never know. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />The text is more or less white to begin with in skin.<br />So I made the true default normal white color, with option for user to pick a color for hover select.<br />I did not change anything, just added the extra text lines, that will override, or take command of any text before it.<br />Please try it on a Metro .skin7 or other .skin7 that started out with white text.<br />Good luck <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> I experimented with two sets of text. Only put one set, or the other in at end of script. <br /><br /><br /><br /><br /><br />To have normal WHITE text, and CUSTOM COLOR text for hover select, try pasting all the 17 lines of text at bottom of text script&#058; <br /><br /><br /><br /><br /><br />OPTION_COLOR CUSTOM_TEXT_COLOR_LEFT=#7036,0,TRUE,FFFFFF<br />OPTION_COLOR CUSTOM_TEXT_COLOR_RIGHT=#7037,0,TRUE,FFFFFF<br />OPTION_COLOR CUSTOM_TEXT_COLOR_SUBMENU=&quot; Text color for submenu&quot;,0,TRUE,FFFFFF<br /><br />[CUSTOM_TEXT_COLOR_LEFT]<br />Main_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_LEFT@,#7F7F7F,#7F7F7F<br />Programs_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_LEFT@,#7F7F7F,#7F7F7F<br />List_separator_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_LEFT@<br />List_separator_split_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_LEFT@<br />Main_arrow_color=#FFFFFF,@CUSTOM_TEXT_COLOR_LEFT@<br /><br />[CUSTOM_TEXT_COLOR_RIGHT]<br />Main2_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_RIGHT@,#7F7F7F,#7F7F7F<br />Main2_arrow_color=#FFFFFF,@CUSTOM_TEXT_COLOR_RIGHT@<br />Shutdown_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_RIGHT@<br />Shutdown_arrow_color=#FFFFFF,@CUSTOM_TEXT_COLOR_RIGHT@<br /><br />[CUSTOM_TEXT_COLOR_SUBMENU]<br />SUBMENU_text_color=#FFFFFF,@CUSTOM_TEXT_COLOR_SUBMENU@,#7F7F7F,#7F7F7F<br />SUBMENU_arrow_color=#FFFFFF,@CUSTOM_TEXT_COLOR_SUBMENU@<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Another way<br />To have CUSTOM COLOR text, same color for normal and for hover select, try pasting the following 17 lines of text at the bottom of text script instead: <br /><br /><br /><br /><br />OPTION_COLOR CUSTOM_TEXT_COLOR_LEFT=#7036,0,TRUE,FFFFFF<br />OPTION_COLOR CUSTOM_TEXT_COLOR_RIGHT=#7037,0,TRUE,FFFFFF<br />OPTION_COLOR CUSTOM_TEXT_COLOR_SUBMENU=&quot;Text color for submenu&quot;,0,TRUE,FFFFFF<br /><br />[CUSTOM_TEXT_COLOR_LEFT]<br />Main_text_color=@CUSTOM_TEXT_COLOR_LEFT@,@CUSTOM_TEXT_COLOR_LEFT@,#7F7F7F,#7F7F7F<br />Programs_text_color=@CUSTOM_TEXT_COLOR_LEFT@,@CUSTOM_TEXT_COLOR_LEFT@,#7F7F7F,#7F7F7F<br />List_separator_text_color=@CUSTOM_TEXT_COLOR_LEFT@,@CUSTOM_TEXT_COLOR_LEFT@<br />List_separator_split_text_color=@CUSTOM_TEXT_COLOR_LEFT@,@CUSTOM_TEXT_COLOR_LEFT@<br />Main_arrow_color=@CUSTOM_TEXT_COLOR_LEFT@,@CUSTOM_TEXT_COLOR_LEFT@<br /><br />[CUSTOM_TEXT_COLOR_RIGHT]<br />Main2_text_color=@CUSTOM_TEXT_COLOR_RIGHT@,@CUSTOM_TEXT_COLOR_RIGHT@,#7F7F7F,#7F7F7F<br />Main2_arrow_color=@CUSTOM_TEXT_COLOR_RIGHT@,@CUSTOM_TEXT_COLOR_RIGHT@<br />Shutdown_text_color=@CUSTOM_TEXT_COLOR_RIGHT@,@CUSTOM_TEXT_COLOR_RIGHT@<br />Shutdown_arrow_color=@CUSTOM_TEXT_COLOR_RIGHT@,@CUSTOM_TEXT_COLOR_RIGHT@<br /><br />[CUSTOM_TEXT_COLOR_SUBMENU]<br />SUBMENU_text_color=@CUSTOM_TEXT_COLOR_SUBMENU@,@CUSTOM_TEXT_COLOR_SUBMENU@,#7F7F7F,#7F7F7F<br />SUBMENU_arrow_color=@CUSTOM_TEXT_COLOR_SUBMENU@,@CUSTOM_TEXT_COLOR_SUBMENU@<br /><br /><br /><br /><br /><br /><br /><br /><br />Note, which ever set you use, press the &quot;Compile button, and save as a different name, like &quot; Metro text mod.skin7 &quot;<br /><br /><br />Edit: forgot submenu arrow color. Now added.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Jun 16, 2016 8:36 am</p><hr />
]]></content>
</entry>
</feed>