del style_dhblog.css style_daohang.css style_movie002.css 
copy web.css+article_index.css+b.css+c.css+entry.css+page_navi.css style.css  /Y /B
csstidy.exe style.css --template=highest --remove_last_;=true style.css
copy base.css+article_index.css+b.css+c.css+entry.css+page_navi.css style_dhblog.css  /Y /B
csstidy.exe style.css --template=highest --remove_last_;=true style.css
copy style_dhblog.css ..\..\dhblog\css\style.css /Y /B
copy style.css ..\..\daohang\css\style.css /Y /B
copy style.css style.css /Y /B