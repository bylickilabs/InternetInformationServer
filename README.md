###                                          IIS Webserver 
- (Internet-Information-Server)

|Tutorial|
|---|

- Seit der Einführung von Windows 7 verfügt jedes Betriebssystem über einen local WebServ (Lokaler Webserver). 

Nach jeder Installation eines Betriebssystemes ist dieser Standardgemäß Deaktiviert. 
Allerdings wartet er nur darauf, aktiviert zu werden.

Ihr möchtet euren eigenen WebServer betreiben?
|LOKAL|
|---|



- Erstelle neue Sicherheits Passwörter für websites, Mail Adressen etc.
---
### Schritt 1:
- Klickt dafür bitte zunächst auf das Windows Logo in eurer Taskleiste, und gebt dort in das Suchfeld |OptionalFeatures| ein. 
|---|

### Schritt 2:
- Es öffnet sich nun ein Fenster, dort sucht ihr bitte nach dem Reiter (Internetinformationsdienste),

### Gefunden? Sehr gut! 

- Nun verseht ihr dieses mit einem Häkchen. 
- Bevor ihr auf OK Klickt, sucht ihr noch schnell nach dem Reiter... "Anwendungsentwicklungsfeatures". Diesen findet ihr unter den gerade eben Aktivierten, ("Internetinformationsdiensten" (+), "WWW-Diensten (+), Allgemeine HTTP-Features (+), Anwendungsentwicklungsfeatures" (+). 
- Dort nur noch eben schnell CGI aktivieren, und nun könnt ihr die Dienste mit dem bestätigen auf Ok Aktivieren.

Der Vorgang sollte innerhalb weniger Sekunden abgeschlossen sein. 
---

### Schritt 3:
- Der lokale Webserver für Windows 10 oder Windows 11 ist nun also aktiviert.
- Jetzt Installieren wir noch die MySql – Datenbank, und PHP auf dem Rechner.
 
- Dazu laden wir den Windows Platform Installer von Microsoft herunter.
- Diesen bekommt ihr Hier [DOWNLOAD](https://go.microsoft.com/fwlink/?LinkId=287166)
---

### Wenn der Platform Installer heruntergeladen wurde, installiert ihn bitte. 

- Platformer aus den Programmen starten!

|"(Microsoft Web Platform Installer)"|
|---|


- Der Platformer sucht erst wenige Sekunden nach installierten Komponenten.

- Anschließend widmen wir uns den Produkten, und geben im Suchfeld –> MySql ein.
- Bei der neuesten Version klicken wir auf –> Hinzufügen "Mysql Windows ......."


### Als nächstes benötigen wir noch PHP. 
Also geben wir in dem Suchfeld PHP ein. Wir brauchen für unseren WebServer folgende Datei: "PHP 7.2 For IIS Express 

|Es empfiehlt sich die größte mögliche neue Version zu benutzen.|
|---|
Nachdem MySql und PHP nun hinzugefügt wurden, befindet sich ein dritter Eintrag in der Übersicht wieder. 
Das ist völlig richtig!

|Nun können wir alle Installieren...|
|---|

- Dann fragt das Programm, welches Kennwort Sie für die MySql Datenbank verwenden wollen. 
- Notieren Sie sich bitte den Benutzernamen –> root und das Passwort, das Sie zweimal eingeben müssen.


### Guten Tag IIS
- Dieser ist zwar nun Betriebsbereit, allerdings fehlen noch ein paar Kleinigkeiten!
---
- Für diesen Zweck habe ich bereits eine .php erstellt, die es ermöglicht sichere Passwörter bis zu 95 Zeichen lang, zu generieren. 
- (Wie lang das Passwort sein soll, entscheidet ihr). 
- Kein Passwort ähnelt dem anderen!


### Durch den aktivierten WebServer befindet sich nun auf eurer Festplatte: C:/ ein "inetpub Verzeichniss" 

Dort befinden sich weitere Unterordner, ladet euch nun das Archiv aus meiner Entwicklerschmiede 
[DOWNLOAD](https://github.com/bylickilabs/InternetInformationServer/archive/refs/heads/main.zip) herunter.


### Nach dem Download, öffnet ihr bitte das herunter geladene Archiv! 

Verschiebt nun bitte die Dateien aus dem Ordner .php nach... 
|C:/inetpub/wwwroot|
|---|

In dem Archiv befindet sich bereits ein Update, verschiebt nun bitte die .php
nach unserem 
|wwwroot.|
|---|

### Das Update beinhaltet bereits einige Neuerungen!

Jetzt könnt ihr den Browser öffnen, und dort gebt ihr folgendes ein: 
|localhost/phpinfo.php|
|---|

- oder benutzt den folgednen Button zum öffnen der .php 
[Öffnen](http://localhost/phpinfo.php)

Die .php wurde im Vorfeld verschlüsselt, und kann nachträglich nicht
durch dritte verändert werden.
Diese Option habe ich mir als Entwickler vorbehalten.

Ps. Schaut gelegentlich mal auf dieser Seite hier vorbei. Nur für den Fall, das neue Updates erschienen sind. 
- Falls dies bereits geschehen ist, findet ihr den neuen Download HIER.
