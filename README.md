# aha Calendar Subscription

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/378820b3697741178315401f9ced07a9)](https://www.codacy.com/gh/MrKrisKrisu/aha-calendar-subscription/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=MrKrisKrisu/aha-calendar-subscription&amp;utm_campaign=Badge_Grade)
[![Gitmoji](https://img.shields.io/badge/gitmoji-%20😜%20😍-FFDD67.svg)](https://gitmoji.dev)

The waste provider of the Region Hannover unfortunately only offers its calendar as a downloadable ics file. If Dates
for the waste collection change, you have to download and update the file manually.

You can use this script to subscribe to the calendar offered by aha.

## Installation

### Download the Script

You can download this script using one of the following methods:

1. Download the script as a zip file
   from [GitHub (click here)](https://github.com/MrKrisKrisu/aha-calendar-subscription/archive/refs/heads/main.zip)
2. Clone the repository with `git clone https://github.com/MrKrisKrisu/aha-calendar-subscription.git`
3. Download via composer with `composer require mrkriskrisu/aha-calendar-subscription`

### Find out your address data

You need different data to retrieve the calendar for your address. Go to
the [aha Abfuhrkalendar](https://www.aha-region.de/abholtermine/abfuhrkalender) and search for your city, street and
house number.

In the list you will find two buttons:

`Download Ical für Apple` and `Android`

Right-click on one of these buttons and click `Inspect`. The exact name may depend on your browser. You can now see the
source code for aha's form. You need the values for `hausnr`, `hausnraddon`, `ladeort` and `strasse`.

Copy the values and paste them into the `index.php` of this script.

Then you have to put the script on a web server which is accessible from your calendar.

## Usage

Subscribe the URL to the `index.php` in your calendar.
