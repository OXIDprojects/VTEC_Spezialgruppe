VTEC_Spezialgruppe
==================

Lizenz: GPL 3.0

OXID eShop Modul zur Anzeige von Artikeln für eine bestimmte Benutzergruppe

Installationsanleitung

-> Kopieren Sie die Dateien im copy_this Ordners in Ihren Webshop.<br \>
-> <b>Erstellen Sie ein Datenbank-Backup!!</b><br \>
-> Führen Sie im Admin-Menü Service->Tools die SQL Datei „1_vtec_add_oxarticles“ im Ordner SQL_Skripte aus.<br \>
-> Aktualisieren Sie die Views.<br \>
-> Führen Sie im Admin-Menü Service->Tools die SQL Datei „2_vtec_new_oxv_view“ im Ordner SQL_Skripte aus.<br \>
-> eeren Sie den tmp Ordner.<br \>
-> Kopieren Sie die Datei functions.php ins Modulverzeichnis, oder ergänzen Sie functions-Datei mit folgendem Eintrag:<b> require('vtec_spezialgruppe/vtec_spezialfunktionen.php');</b><br \>
-> Aktivieren Sie das Modul und tragen Sie in den Moduleinstellungen die OXID der privilegierten Benutzergruppe ein. Die OXID der Benutzergruppe erfahren Sie in den Benutzer Einstellungen-> Benutzergruppen<br \>
-> Im Artikel-Stamm kann nun eine Checkbox aktiviert werden die den Artikel nur der privilegierten Benutzergruppe angezeigt.<br \>
