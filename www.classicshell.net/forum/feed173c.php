<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=3240" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-15T13:56:28-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=3240</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-15T13:56:28-07:00</updated>
<published>2017-08-15T13:56:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=33715#p33715</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=33715#p33715"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=33715#p33715"><![CDATA[
I think I found why this is happening. The correct URL to use is:<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />To fix this, follow these steps:<br />1. Open Start Menu Settings<br />2. Go to Customize Start Menu tab<br />3. Now:<br /><br />3-A:<br />If using <strong><span style="text-decoration: underline">classic style</span></strong>, add a sub-item for the &quot;Search Box&quot; item by dragging &quot;Custom&quot; from the right column and dropping it over the &quot;Search Box&quot; in the left column. Then double click Custom and enter this URL I mentioned above as the &quot;Command&quot;.<br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />OR<br /><br />3-B:<br />If using <strong><span style="text-decoration: underline">Windows 7 style</span></strong>, add a Custom item on the Customize Start Menu tab by pressing the Insert key. Change &quot;Administrative Tools&quot; to &quot;Custom&quot;. Now double click the icon of the &quot;Custom&quot; item and enter this URL I mentioned above as the &quot;Command&quot;.<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />Now when you search for anything and click See results in Explorer... the results in your Explorer window that opens will be consistent with what the Classic Start Menu shows.<br /><br />For now, you will have to ignore the built-in item called &quot;See More Results&quot; and use &quot;See results in Explorer...&quot; that you added manually.<br /><br />Essentially, if you use more of the Advanced Query Syntax, the current implementation of &quot;See More Results&quot; sometimes returns an empty Explorer window whereas a search provider defined with this URL returns results consistent with the Start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 15, 2017 1:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-03T09:05:33-07:00</updated>
<published>2015-04-03T09:05:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18581#p18581</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18581#p18581"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18581#p18581"><![CDATA[
Maybe you need to reinstall the correct iFilter: <!-- m --><a class="postlink" href="https://www.microsoft.com/en-us/download/details.aspx?id=17062">https://www.microsoft.com/en-us/downloa ... x?id=17062</a><!-- m --> Note that on 64-bit Windows, you need 64-bit IFilters, and on 32-bit Windows, obviously you need 32-bit. If you've installed the 32-bit IFilter on 64-bit Windows, uninstall it and install the correct one.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Apr 03, 2015 9:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[classicshellfan]]></name></author>
<updated>2015-04-03T06:55:07-07:00</updated>
<published>2015-04-03T06:55:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18575#p18575</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18575#p18575"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18575#p18575"><![CDATA[
Thanks for that Library tip - I've done that for the folder which contains the 'plint' document and still I can't search either of the two unique words in it.<br /><br />And neither can the windows search engine accessed through the ho-hum swiping-to-the-right search window<br /><br />Any thoughts?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9854">classicshellfan</a> — Fri Apr 03, 2015 6:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-02T06:52:18-07:00</updated>
<published>2015-04-02T06:52:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18544#p18544</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18544#p18544"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18544#p18544"><![CDATA[
Adding a file or rather its parent folder to a Library is an easier and guaranteed way to index that file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Apr 02, 2015 6:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[classicshellfan]]></name></author>
<updated>2015-04-02T06:18:46-07:00</updated>
<published>2015-04-02T06:18:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18543#p18543</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18543#p18543"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18543#p18543"><![CDATA[
<span style="font-family:Times New Roman;"></span><div align="justify"><span style="font-size: 150%; line-height: 116%;"><span style="font-family:Courier Final Draft;"></span></span></div><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Hi</span></span><br /><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"></span></div><br /><span style="font-family:Times New Roman;"></span><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Thanks for getting back to me so quickly, and for the helpful things you said</span></span><br /><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"></span></div><br /><span style="font-family:Times New Roman;"></span><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Problem 2 – the weird flash-up window. I had instability this morning in another program and did a system restore to about a month ago. That problem has been solved. I hope this is useful feedback: suggests a windows bug to me.</span></span></div><div align="justify"><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Problem 1 – yep, the &#39;Allow this file to have contents indexed&#39; is checked and I&#39;ve checked the folder option on that page for good measure. I&#39;ll monitor that over the weekend and see if any fresh indexing has picked that up.</span></span><br /><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"></span></div><br /><span style="font-family:Times New Roman;"></span><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Meanwhile, can you help me with the Libraries suggestion. I&#39;m not sure what you mean?</span></span></div><div align="justify"><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">All the best</span></span><br /><span style="font-family:Times New Roman;"></span></div><div align="justify"><span style="font-family:Courier Final Draft;"></span></div><br /><span style="font-family:Times New Roman;"></span><div align="justify"><span style="font-size: 150%; line-height: 116%;"><span style="font-family:Courier Final Draft;"><span style="font-size: 100%; line-height: 116%;">Jonathan</span></span></span></div><br /><span style="font-family:Times New Roman;"></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9854">classicshellfan</a> — Thu Apr 02, 2015 6:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-02T05:13:37-07:00</updated>
<published>2015-04-02T05:13:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18540#p18540</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18540#p18540"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18540#p18540"><![CDATA[
@classicshellfan, for your first problem, check the properties of the file whose contents are not getting indexed. Go to its Properties -&gt; Advanced and check 'Allow this file to have contents indexed'. Try including the file in your Documents Library.<br /><br />About your second problem and what others are also facing in this thread, there seems to be a problem with &quot;See more results&quot; functionality in some cases but we need a reliable way to reproduce it. It has happened to me too - these weird behaviors.<br /><br />Sometimes 'See more results' actually shows less results than what the Start Menu shows as 'smipx013' said. Sometimes 'See more results' is empty as 'ammit1984' said and I've also had the Explorer window opening and closing immediately bug which 'classicshellfan' mentions. I will have to find a way to reproduce the issue, only then it can be fixed. Some of them might be Windows Explorer bugs or broken behavior because the menu passes on the query to Explorer as Ivo said.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Apr 02, 2015 5:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[classicshellfan]]></name></author>
<updated>2015-04-01T06:35:30-07:00</updated>
<published>2015-04-01T06:35:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18529#p18529</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18529#p18529"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=18529#p18529"><![CDATA[
<span style="font-family:Times New Roman;"></span><div align="justify">Hi all</div><br /><div align="justify">I have two variants on these sorts of problems</div><div align="justify">The first is very straightforward</div><div align="justify">I use folders on my new Windows 8.1 64-bit desktop to store my documents. My old computer – a Vista – could find any word in any doc wherever it was – very handy, as I&#39;m a researcher.</div><div align="justify">Here&#39;s problem number one: I have a test document I&#39;ve got filed in a folder, and it has a unique nonsense name &#40;&#39;plint&#39; as you happen to ask&#41; with just two words in it &#40;&#39;Scrunty Trubblers&#39; as you happened to also ask&#41;.</div><div align="justify">Guess what – search &#39;plint&#39; and it finds the doc. Search either of the other two words – no result at all. And yet the search regularly finds words that are in filed documents – as an example, it finds &#39;splint&#39; in other docs with no problem at all when I search my unique word &#39;plint&#39;.</div><div align="justify">I&#39;ve been into Windows Indexing Options and ensured I&#39;m indexing the content of .doc and .docx – but this is the result.</div><div align="justify">Your thoughts welcome.</div><div align="justify">Second problem – and this is a new one after a complete re-index</div><div align="justify">Let&#39;s say I search a word with masses of different results in lots of different formats – &#39;picture&#39;, say. Click on one of those results on the column that appears – I go straight to the item. Click on one of the format sub-dividers, &#40;in this actual case &#39;Documents &#40;476&#41;&#39;&#41; then I get a search window open showing all 476 results.</div><div align="justify">But if I go for &#39;show more results&#39; at the bottom of the column, whereas I used to get the whole search opened out in a window – I get the window open for a flash of a second and then disappear completely.</div><div align="justify">Any thoughts on that one?</div><div align="justify">Your help as always very gratefully received...</div><span style="font-family:Courier Final Draft;"></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9854">classicshellfan</a> — Wed Apr 01, 2015 6:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[smipx013]]></name></author>
<updated>2014-11-06T04:08:24-07:00</updated>
<published>2014-11-06T04:08:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15515#p15515</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15515#p15515"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15515#p15515"><![CDATA[
The search is broken for me too.  I am running Windows 8.1 x64.  When I search from the start menu it brings up a lot of results - Good. If I then click on &quot;See More results&quot; it works too and brings up all of the search results in an unsorted list (unsorted by application where the search term is found).<br />the problem is if I search for a term and it brings up the nice ordered list of results - broken down into their respective application or type where found (e.g. Files,  Emails,  Pictures,  Etc....).  The problem arises if I click on one the sub category &quot;Files&quot;.  It indicates how many hits there are (e.g. 40) but the resultant list is only containing a couple of results and the heading of the search location is set to &quot;Search Results in CLSID_StartMenuProviderFolder&quot;<br />If I click the other subcategories they are fine.<br />thanks<br />Paul<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4723">smipx013</a> — Thu Nov 06, 2014 4:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-10-18T21:49:15-07:00</updated>
<published>2014-10-18T21:49:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15323#p15323</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15323#p15323"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15323#p15323"><![CDATA[
After some testing and playing with the Windows Search Advanced Query Syntax, I can reproduce the issue on Windows 7, Windows 8.1 and Windows 10. Here's what I tested. In my case, if I type just a few keywords (e.g. flowers) and click 'See more results', I get the results of flowers pictures in Explorer that I get in the Start Menu.<br /><br />But if I use some property from the AQS, e.g. flowers kind:pictures then the Classic Start Menu shows me results correctly but I get nothing when I click &quot;See more results&quot;. On Windows 7, if I use the original Windows 7 Start Menu (WSM) to do the same, it correctly returns me all the results in &quot;See more results&quot; even for a complex query.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Oct 18, 2014 9:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ammit1984]]></name></author>
<updated>2014-10-09T02:24:42-07:00</updated>
<published>2014-10-09T02:24:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15211#p15211</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15211#p15211"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15211#p15211"><![CDATA[
Hiya<br /><br />I've tested this on 3 Windows 8 computers with the same results on all of them.<br /><br />You can start typing in the start bars search box and a ton of files pop up, all good...and then to see more files you click the &quot;see more results&quot; link and it takes you to explorer where you get...nothing.<br /><br />This is the same on every Windows 8 machine i've tested on.  <br /><br />I've tested on Windows 7 with classic shell on it and it works ok - a seemingly pointless test but i was curious.<br /><br />I've made sure the files i'm searching are ticked in the index and to double check i've even rebuilt the index from scratch before I got the point of asking on this forum.  No change.  There cannot be indexing issues on all 3 of the machines i've tested on.  <br /><br />My theory is that the classic shell start bar search doesn't play well with Windows 8 search... they completely redid the search on Windows 8 and made explorer more powerful, is there a chance that this is a bug?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4580">ammit1984</a> — Thu Oct 09, 2014 2:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-10-08T08:19:21-07:00</updated>
<published>2014-10-08T08:19:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15203#p15203</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15203#p15203"/>
<title type="html"><![CDATA[Re: Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15203#p15203"><![CDATA[
&quot;See more results&quot; sends the query to Explorer to look at all indexed files. Are you sure your files are indexed?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Oct 08, 2014 8:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ammit1984]]></name></author>
<updated>2014-10-07T14:29:47-07:00</updated>
<published>2014-10-07T14:29:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15179#p15179</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15179#p15179"/>
<title type="html"><![CDATA[Search not working properly??]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3240&amp;p=15179#p15179"><![CDATA[
Hi All!<br /><br />I was wondering if someone could help me.  <br /><br />I have several PC's with Windows 8 (or 8.1) on them and I've installed classic shell on them all to see if I can replicate the issue which I can.  <br /><br />So I do the following:<br /><br />1.  Click the start button<br />2.  In &quot;search programs and files&quot; type in a file name - this then pops up with no problems at all and is listed.  <br />3.  Click on &quot;see more results&quot; <br />4.  Nothing is listed at all here, not even the files that were found originally.<br /><br />So why is this?  Does anyone know?  it doesn't matter how many or how few files there are to find, when you click on &quot;see more results&quot; none of them show up.  This feature works fine in Windows 7 but it doesn't work in classic shell.  <br /><br />Can someone help me?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4580">ammit1984</a> — Tue Oct 07, 2014 2:29 pm</p><hr />
]]></content>
</entry>
</feed>