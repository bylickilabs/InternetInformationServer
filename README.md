### IIS Webserver
- (Internet-Information-Server)
---
Seit der Einführung von Windows 7 verfügt jedes Betriebssystem über einen local WebServ (Lokaler Webserver). 
Nach jeder Installation eines Betriebssystemes ist dieser Standardgemäß Deaktiviert. 
Allerdings wartet er nur darauf, aktiviert zu werden.

### Ihr möchtet euren eigenen WebServer (LOKAL) betreiben?

|Tutorial|
|---|

- Erstelle neue Sicherheits Passwörter für websites, Mail Adressen etc.
---
### Schritt 1:
- Klickt dafür bitte zunächst auf das Windows Logo in eurer Taskleiste, und gebt dort in das Suchfeld (OptionalFeatures) ein. 
"ohne Klammern", und bestätigt dieses mit Enter.
---
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

### Wenn der Platform Installer heruntergeladen wurde, installiert ihn bitte. 

- Platformer aus den Programmen starten!
- Wenn das erledigt ist, geht auf das Windows Logo und startet den Platformer.
"(Microsoft Web Platform Installer)"

- Der Platformer sucht erst wenige Sekunden nach installierten Komponenten.

Anschließend widmen wir uns den Produkten, und geben im Suchfeld –> MySql ein.
Bei der neuesten Version klicken wir auf –> Hinzufügen "Mysql Windows ......."

Als nächstes benötigen wir noch PHP. 
Also geben wir in dem Suchfeld PHP ein. Wir brauchen für unseren WebServer folgende Datei: "PHP 7.2 For IIS Express 
(Es empfiehlt sich die größte mögliche neue Version zu benutzen).
Nachdem MySql und PHP nun hinzugefügt wurden, befindet sich ein dritter Eintrag in der Übersicht wieder. Das ist völlig richtig!

Nun können wir alle Installieren...

Dann fragt das Programm, welches Kennwort Sie für die MySql Datenbank verwenden wollen. 
Notieren Sie sich bitte den Benutzernamen –> root und das Passwort, das Sie zweimal eingeben müssen.
