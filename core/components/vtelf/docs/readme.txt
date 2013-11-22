-----------------------
vtElF (Element in File)
-----------------------
Simple extra used to calling chunks and snippets from files without creating it in Manager.
Helpful if you're using local server for creating sites.
Recomended to use it only during development, not on ready site.

Author: Vlad Tokarev <Vlad@Tokarev.tk>
Copyright 2013

Bugs and Feature Requests: https://github.com:Vadiok/vtElF
Questions: http://forums.modx.com


Usage:
[[vtElF?
   &vtPath=`[[++assets_path]]mytests`
   &vtFile=`userchunk.txt`
   &myName=`Vlad`
   &mySetting2=`12345`
]]


Properties:
&vtPath - directory of called file; 
&vtFile - name of called file; 
&vtIsChunk - set to `true` if your file hasn't `return` statement. 
Any other settings will be passed to your snippet/chunk.