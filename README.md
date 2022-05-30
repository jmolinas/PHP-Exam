# PHP Exam

## Usage

```
cd path/to/repo/database
mysql -u root -h 127.0.0.1 < nba2019.sql

cd path/to/repo
php -S localhost:8080 -t public
```

## Example URLs
```
/export?type=playerstats&team=TOR
/export?type=playerstats&position=C
/export?type=playerstats&player=Steven%20Adams&format=xml
/export?type=players&player=Steven%20Adams&format=json
/export?type=players&team=HOU&format=xml
```
