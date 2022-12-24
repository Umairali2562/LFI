create a file ok.txt and paste /etc/passwd there ...

then open the file like this :

http://localhost/path.php?thepath and you'll get a text file named path.txt which will have this ..:
/usr/home/anitabs/
/usr/home/pkmfim/
/usr/home/dkiiad/
/usr/home/salonzu/

or 
/home/anitabs/
/home/pkmfim/
/home/dkiiad/
/home/salonzu/

if you put access-log in the parameter :

http://localhost/path.php?thepath=access-logs:

then it will automatically get the path from etc passwd file and assign /access-logs

/usr/home/axisbcg/access-logs/axisbcg.com --> assigning the string "/access-logs/username.com"

let's say for example that the domain is site.com.pk or site.co.in then you can do this :

http://localhost/path.php?thepath=access-logs&domain=site.com.pk

/usr/home/axisbcg/access-logs/site.com.pk 





