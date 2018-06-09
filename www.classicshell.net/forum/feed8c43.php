<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=5&amp;t=339" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-07-03T00:36:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=5&amp;t=339</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-03T00:36:10-07:00</updated>
<published>2014-07-03T00:36:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13743#p13743</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13743#p13743"/>
<title type="html"><![CDATA[Re: Creating 32-bit Start Menu Orbs [UPDATED FOR ANIMATED OR]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13743#p13743"><![CDATA[
its very hard to resize animated orbs, and the more frames you have the bigger it will become, making it difficult to share..<br /><br />I recommend under 20 frames.. 12-15 is probably best<br /><br />Resizing will negate the first pixel line of data you entered, so you will have to enter that again... but resizing will also often ruin the entire animation as the height and width wont match up.. <br /><br />one possible solution would be to delete the first row from the image, then resize, then add another row to the top of your smaller image and add the animation data to the new row.. I'll test this later<br /><br />it may also be necessary that the new height be equally divisible by the number of frames, without decimals.. (perhaps this is required for all animations, i dont know if it supports decimal places during its division)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Jul 03, 2014 12:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-06-29T23:01:55-07:00</updated>
<published>2014-06-29T23:01:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13638#p13638</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13638#p13638"/>
<title type="html"><![CDATA[Re: Creating (&amp; Installing) 32-bit .png Windows Start Menu O]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=13638#p13638"><![CDATA[
<strong><span style="font-size: 200%; line-height: 116%;"><span style="font-family:Verdana,sans-serif;">[UPDATE] ANIMATED ORBS! &#40;up to 255 Frames of Animation!&#41;:</span></span></strong><span style="font-family:Times New Roman,serif;"></span><br /><ol style="list-style-type: decimal"><li><span style="font-family:Verdana,sans-serif;">Create your states the same as above, only you can create as many as 255.. all the same width, just as before, using the control boxes so they are all exactly spaced, for as many as you have.. be sure to make your document height exactly the size needed.. for example if your box is 256 w x 230 h, and you want 50 frames, then multiply 230 x 50, and make your canvas size 256w x 11500h.</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Select the Top Box and Paste your Animated Frame directly in the box, auto-fitted to the dimensions:</span><span style="font-family:Times New Roman,serif;"></span><ul><li><span style="font-family:Verdana,sans-serif;">Select a colored box with the Marching Ants, then paste your single graphic animation frame on a new layer within those marching ants, then repeat with the rest of the animated frames, putting every frame over a selected different color &#40;with the marching ants&#41;, so that they&#39;ll all be centered nicely</span><span style="font-family:Times New Roman,serif;"></span></li></ul></li><li><span style="font-family:Verdana,sans-serif;">Arrange all your colored boxes down so there is no spaces in between</span><span style="font-family:Times New Roman,serif;"></span><ul><li><span style="font-family:Verdana,sans-serif;">If you have access to Photoshop:</span><span style="font-family:Times New Roman,serif;"></span><ul><li><span style="font-family:Verdana,sans-serif;">Create one colored box, Hit Ctrl+Alt+T to make a Transform-Duplicate</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Use your keyboard arrow keys to move the new box directly down below the current box, zoom in at a pixel level to be sure there is no overlapping pixels</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Hit Enter to complete the transition</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Zoom all the way out to view the full document</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Hit Ctrl+Alt+Shift+T over and over to repeat the last transition until you get to the bottom if the document</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Go back and Ctrl-Click on each box and hit Ctrl+U to adjust its color a bit, repeat down to the bottom</span><span style="font-family:Times New Roman,serif;"></span></li></ul></li></ul></li></ol> <ul><li><span style="font-family:Verdana,sans-serif;">When you&#39;re finished with your orb, resize your Canvas to 1 pixel more in height.</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Select all your layers and move them all down one pixel, if your extra pixel row was added to the bottom, then begin coloring the top 1-pixel row with the following colors, pixel by pixel, as follows:</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <strong><span style="font-family:Verdana,sans-serif;">Pixels 0 &amp; 1 - Standard Animation Data Pixels &#40;doesn&#39;t change&#41;:</span></strong><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Double-click your color picker and change RGB to 65R 78G 77B, switch to your 1-pixel sized pencil and click on the first pixel in the far left of the row to color it that color - This is called Pixel &quot;0&quot;</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Change RGB to 66R 84G 78B and color in the pixel to the right of the last one, the second pixel from the left, Pixel &quot;1&quot;</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;"><strong>Pixel 2 - Graphic Animation Frame Data:</strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Change RGB to 1R 0G, then change B to the number of animated frames you have, like 50B, and color the 3rd pixel in your new row, which is Pixel &quot;2&quot;... &#40;the &quot;1R&quot; just states we&#39;re only using one row here, which is all we&#39;ll ever need, so this doesn&#39;t change</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;"><strong>Pixels 3, 4, &amp; 5 - Defining Frames for Button States</strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><strong><span style="font-family:Verdana,sans-serif;">Normal State:</span></strong><span style="font-family:Verdana,sans-serif;">Change RGB to 0R, 0G, and then change R to the frame you want in your normal state, first frame=0, so 0B for the first frame as Cold state&#41;, then color the next pixel, the 4th from the left, or Pixel &quot;3&quot;</span><span style="font-family:Times New Roman,serif;"></span></li><li><strong><span style="font-family:Verdana,sans-serif;">Hot State:</span></strong><span style="font-family:Verdana,sans-serif;">Change RGB to 0R 0G and change B to the frame you want on your Hot state, say, frame 48, so 48B.. then use that to color in the 5th pixel, or Pixel &quot;4&quot;</span><span style="font-family:Times New Roman,serif;"></span></li><li><strong><span style="font-family:Verdana,sans-serif;">Pressed State:</span></strong><span style="font-family:Verdana,sans-serif;">Change RGB to 0R, 0G, then change B to the frame you want when clicked.. say frame 49, so 49B, then use that to color in the 6th pixel, or Pixel &quot;5&quot;</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;"><strong>Pixels 6 &amp; 7 - Defining Normal to Hot Animation, Timing, &amp; Frames</strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Change RGB to R1 G1 and change B the time length you want &#40;18= 0.3 seconds, make the number higher for slower animations&#41;, such as 50B.. Color the 7th pixel in the row &#40;called Pixel &quot;6&quot;&#41; with this color</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Change RGB to R= End frame, G=0, B= Start Frame, as you want it to play from normal to hot.. such as 48R 0G 0B, to go from beginning to end &#40;0 is frame 1, 49 is frame 50&#41;, then color the 8th pixel &#40;called Pixel &quot;7&quot;&#41; with this color.. &#40;Note: raising this number doesnt seem to affect the play.. all frames should be played if the range is higher than what is present&#41;</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;"><strong>Pixels 8 &amp; 9 - Defining Hot to Normal Animation, Timing, &amp; Frames</strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Change RGB to R1 G1 and change B to the time length you want &#40;it says 18= 0.3 seconds, so make the number higher for slower animations&#41;, such as 50B.. Color the 7th pixel in the row &#40;called Pixel &quot;8&quot;&#41; with this color &#40;this color will probably be the same as Pixel &quot;6&quot; above..&#41;</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Change RGB to R= End Frame, G=0, B = Start frame, as you want it to play from Hot back to normal.. so if you wanted it to play backwards you&#39;d enter 0R 0G 48B.. &#40;0 is frame 1, 49 is frame 50&#41;, or if you just wanted it to repeat the same animation you&#39;d use the same as above… then color the 9th pixel with this color</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;"><strong>Pixels 10, 11, 12, &amp; 13 - Not available for Orb animation in Classic Shell</strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Color them 0R, 0G, 0B, &#40;100% Black in RGB&#41;</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <span style="font-family:Verdana,sans-serif;">------------------</span><span style="font-family:Times New Roman,serif;"></span><br /><ol style="list-style-type: decimal"><li><span style="font-family:Verdana,sans-serif;">Save it, export it as PNG, and load it into classic shell</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">You can cancel the animation by simply clicking... so dont worry about making long animations</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Making a short Normal to Hot animation, then a very long Hot to Normal animation will allow your animation to continue playing as you move on to other things &#40;as long as you dont click anything&#41;</span><span style="font-family:Times New Roman,serif;"></span></li></ol> <span style="font-family:Verdana,sans-serif;"><strong>You can also put Completely different animations for you Orb.. such as: </strong></span><span style="font-family:Times New Roman,serif;"></span><br /><ul><li><span style="font-family:Verdana,sans-serif;">Frame 49 = Normal State</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Frame 2-25 &#40;Completely Different&#41; are used for the Normal to Hot transition...</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Then frames 30-45 &#40;Completely different again&#41; are for the Hot back to Normal transition</span><span style="font-family:Times New Roman,serif;"></span></li><li><span style="font-family:Verdana,sans-serif;">Then Frame 1 &#40;a completely unrelated image, again&#41; is used for the Pressed state</span><span style="font-family:Times New Roman,serif;"></span></li></ul> <br /><span style="font-family:Verdana,sans-serif;">Interested to see or hear how other people are using this new implementation of Animated Frames.. share your ideas, requests, or work in the Start Button Forum Section!</span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Jun 29, 2014 11:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-05T16:46:00-07:00</updated>
<published>2013-03-05T16:46:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1744#p1744</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1744#p1744"/>
<title type="html"><![CDATA[Re: Creating 32-bit PNG's - for Windows Start Menu Orbs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1744#p1744"><![CDATA[
Another, more fail-safe way to work, might be to:<br /><ul><li>Create your 300x300 icon</li><li>Duplicate it two times, by either:<ul><li>Hitting Ctrl+A to select all, New Document from Clipboard, Repeat</li><li>or Saving it, then Find it in the folder &amp; duplicate it two times</li></ul></li><li>Create a New Document sized 300w x 900h</li><li>Create the Colored boxes as described in the second step above</li><li>In each of the three 300x300 images:<ul><li>Ctrl+A to Select All</li><li>Crop Image to remove any off-stage elements</li><li>Group all visible Elements into a New Group</li><li>Ctrl+Drag to the 300x900 doc, then Hold Ctrl+Shift to release to paste in place, Use Shift +Up/Down (just Up /Down for smaller movements) to move it Vertically up or down to its location, centered on its colored block</li><li>**you can also use the Distribute &amp; Align functions to help get them distributed equally</li></ul></li><li>Trim the Edges with the Colored Square Boxes as detailed in 2nd post above</li><li>Save as PNG</li><li>The main difference between this method &amp; the one above, is that you are creating a new document, rather than resizing, then importing 3 separate graphic in fresh, so there's less likelihood of a few pixels going astray</li></ul>**also, if you are using a Gradient Transparency be sure it only fills the bottom half of the Image background, or else the faint edges will show around the icon.. you can do that by either filing a marquee selection of the desired height, or by filling the layer, then transforming it and dragging the top downward<br /><div align="center">________________________________<br /><div align="right">.</div>Be sure post any Orbs you create in the Start Button Section so others can enjoy them, here: <!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewforum.php?f=18">viewforum.php?f=18</a><!-- l --></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Tue Mar 05, 2013 4:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-05T07:54:46-07:00</updated>
<published>2013-03-05T07:54:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1727#p1727</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1727#p1727"/>
<title type="html"><![CDATA[Re: Creating 32-bit PNG's - for Windows Start Menu Orbs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1727#p1727"><![CDATA[
its also a good idea to set up a Color Square Checking System, as such:<br /><div align="center">___________________</div><ul><li>If your image is 300x300, for example, create a new layer, select it, and fill it with Red</li><li>Resize your image Canvas to 300wx900h</li><li>Duplicate the Red Color layer 2 times</li><li>Use the Fill Bucket to fill one Square with Blue and one square with Green</li><li>Set the three color boxes exactly on the document so they are not overlapping, and there is no space between them, and they are centered exactly in the middle.. so one nudge of any block in any direction will leave a blank space.</li><li>Set the 3 color block layers behind all other layers</li><li>Normal State:<ul><li>Set you first Image of the Normal State on the top, centered on the top colored block</li><li>Click the layer for the color block thats on top</li><li>Ctrl+Click the Layer to select the block, or Use a Magic Wand select it</li><li>Right-Click and select &quot;Invert&quot; to select the space of the bottom two squares</li><li>Click your top graphic image layer, and hit Delete on your keyboard</li></ul></li><li>Hot State:<ul><li>Set you first Image of the Hot State in the Middle section, centered on the middle colored block</li><li>Click the layer for the color block thats in the middle</li><li>Ctrl+Click the Layer to select the block, or Use a Magic Wand select it</li><li>Right-Click and select &quot;Invert&quot; to select the space of the squares above &amp; below it</li><li>Click your middle graphic image layer, and hit Delete on your keyboard</li></ul></li><li>Click State:<ul><li>Set you first Image of the Click State on the bottom, centered on the bottom colored block</li><li>Click the layer for the color block thats on bottom</li><li>Ctrl+Click the Layer to select the block, or Use a Magic Wand select it</li><li>Right-Click and select &quot;Invert&quot; to select the space of the two squares above it</li><li>Click your top graphic image layer, and hit Delete on your keyboard</li></ul></li><li>Hide the 3 color Block Layers</li><li>You should now have a very clean graphic with no overlapping or strange alignment</li><li>Save as PNG with Transparency </li><li>Done</li></ul><div align="center">_____________________</div>Below is an Example, the Original Can be found <a href="http://classicshell.net/forum/viewtopic.php?f=18&amp;t=341&amp;p=1714#p1714" class="postlink">Here:</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Tue Mar 05, 2013 7:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-01T00:02:49-07:00</updated>
<published>2013-03-04T02:38:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1669#p1669</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1669#p1669"/>
<title type="html"><![CDATA[Creating 32-bit Start Menu Orbs [UPDATED FOR ANIMATED ORBS!]]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=339&amp;p=1669#p1669"><![CDATA[
<img src="http://i771.photobucket.com/albums/xx354/chinarabbit/Capture30_zps114d861c.jpg" alt="" /><br /><br /><span style="text-decoration: underline"><strong>**[UPDATED!] 255-frame Animations described in the 4th Post of this thread**</strong><br /></span><div align="right">.</div>The format &quot;32-bit PNG&quot; seems to confuse many people, so i'll explain it here, and how to make a custom Start Menu Orb<br /><div align="right">.</div>The above orb set was created by Wesley, available here: <!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=18&amp;t=194&amp;p=1667#p1667">viewtopic.php?f=18&amp;t=194&amp;p=1667#p1667</a><!-- l --><br /><div align="center">_____________________<br /><div align="left"><strong>*Step 1 - Create Start Menu Orb:</strong></div></div><ul><li>Make a new image thats 200wx200h with a transparent background</li><li>Create the image as you want your Start Menu Orb to look in its normal state<ul><li>Its a good Idea to test your image as small as 30x30 and as big as 200x200 to be sure it still looks good</li></ul></li><li>Resize the Canvas to 200w600xh</li><li>Duplicate your original image two times, so you have 3 layers, and center the other two in the 200-400 &amp; the 400-600 square</li><li>Edit the middle image to be your hot state, as you want it to look when the cursor is moved over the start button</li><li>Edit the bottom on the bottom as you want it to look when the start button its pressed</li><li>Be sure you are working in 8-bit mode using Transparency (Transparent Background)</li><li>Click Save, in most programs transparency will be saved automatically, adding a 4th 8-bit channel (Alpha) to the Three 8-bit color channels: 8-bit Red, 8-bit Green &amp; 8-bit Blue (RGB 24-bit).. meaning most PNG's will automatically be saved as 32-bit images (RGBa)</li><li>If it gives you an option to save it as 24-bit, select that, and also select &quot;Transparency&quot; checkbox, 24+8=32</li><li>Save the image</li></ul><div align="right">.</div>*You can create any size square image you like, such as 150x150, just be sure its centered, and your graphic occupies the space, then just triple the pixel height when you resize the canvas (150x3=450, so resize a 150x150 image to 150w x 450h, etc.. and it doesnt have to be square, so long as the widths are all the same, depending on how you want it to look, or sit..etc ).. <br /><div align="right">.</div>**Its important NOT to work in 16-bit or 32-bit mode when creating your PNG, only 8-bit.. as that setting is per channel, so 32-bit CMYK would would be 128-bit.. PNG doesnt support CMYK, and 32-bit doesnt support Alpha transparency, so 32-bit mode would create 96-bit 3-channel (RGB) .PNG image, but you must have only a 32-bit image for most any custom PNG graphic having to do with Windows <br /><div align="center">_____________________</div><strong>*Step 2 - Set it as your Start Menu Orb</strong><br /><ul><li>Save your PNG image to a permanent location with a path name will not be moved or changed</li><li>Right-click your Classic Shell Orb &amp; go to Settings:</li><li>Click the &quot;Start Button&quot; tab</li><li>Under &quot;Button Look&quot; select &quot;Custom Button&quot;</li><li>Click &quot;Button Image&quot; and click the &quot;...&quot;</li><li>Browse to your new custom image</li><li>Under &quot;Button Size&quot; select any size you want your button to be<ul><li>Between 30 &amp; 50 for single row task bar, or up to 70 or more if you want it bigger</li><li>Between 70 &amp; 100 if you use a double-row taskbar, or as high as 200 if you like a real big one</li><li>The example above is size 170</li></ul></li><li>Click OK</li></ul><img src="http://i.imgur.com/1w6YcgE.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Mar 04, 2013 2:38 am</p><hr />
]]></content>
</entry>
</feed>