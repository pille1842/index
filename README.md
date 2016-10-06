# Index

This is a simple, yet highly customizable start page based on PHP and jQuery.
It supports quick navigation via hotkeys and can be extended with plug-ins.

![Screenshot](https://github.com/pille1842/index/raw/master/screenshot.png)

You can see a live demo with all plug-ins enabled
[here](http://www.erixpage.de/indexdemo/).

## Installation

Place the files in a folder of your choosing inside your document root.  Then
rename the `index.json.example` file to `index.json` or create a new file
based on it.  There needs to be a valid JSON file called `index.json` in the
same directory as `index.php`.

If your index resides in a subdirectory of your document root, you will need
to change the value of `baseurl` in the index.json.

That's it!  You should be good to go.

## Using the index

Every link in your index is part of a group.  When you hit the hotkey of a
group, it gets expanded and you can use the hotkeys defined for the links in
it to open a new tab or window with that link.

This means that you can re-use hotkeys in other groups (for example `f` for
Facebook in your "Social Networks" group and also `f` for /r/funny in your
Reddit group).  You shouldn't use group hotkeys for links, though, since group
hotkeys are always active and you'd probably run into unwanted side effects.

## Customization

The index can be heavily extended by using plug-ins.  Each plug-in can be
attached to either the top (before the link groups) or the bottom (after the
link groups). Available plug-ins are in the `plugins/` directory.

You can use the following plug-ins, either in plugins-top or plugins-bottom:

- clientinfo
- clock
- duckduckgo
- google
- greeting
- subreddit

Depending on your choice of plug-ins, you may need to set certain other
variables. These are listed for every plug-in below.  All the keys must be
added to the root object of the index.json file.

### clientinfo

Displays the user's IP address and his User-Agent string.  No additional
configuration is required.

### clock

Displays a clock to the user that is kept up-to-date with JavaScript.  You
need to specify if the clock should be displayed in 12- or 24-hour format,
e.g.:

```json
{
    "clock-twentyfour": "on"
}
```

### duckduckgo

Displays a search form for [DuckDuckGo](https://duckduckgo.com/).  You need to
specify a hotkey; when pressed, focus is given to the search field.

```json
{
    "duckduckgo-shortcut": "Shift+d"
}
```

### google

Displays a search form for [Google](https://www.google.com/).  You need to
specify a hotkey; when pressed, focus is given to the search field.  In
addition, you need to specify a URL the search should lead to (e.g.
https://www.google.com/search or https://www.google.de/search). This way, you
can use your locale-specific Google site.

```json
{
    "google-shortcut": "Shift+g",
    "google-url": "https://www.google.com/search"
}
```

### greeting

Displays a short greeting to the user depending on the time of day when the
page is loaded. You need to give it your name:

```json
{
    "greeting-username": "Galactic President Superstar McAwesomeville"
}
```

### subreddit

Displays a form to open a specific subreddit in a new tab; so you enter
"babyelephantgifs" and the
[subreddit](https://www.reddit.com/r/babyelephantgifs) will be opened.  You
need to specify a hotkey; when pressed, focus is given to the search field.

```json
{
    "subreddit-shortcut": "Shift+r"
}
```

## Contributions

Since this project is work-in-progress, there's only a subreddit quickjump
plug-in as of now. If you have ideas for useful plug-ins this project could
ship by default, I'd appreciate a pull request!

## License

This project is licensed unter the GNU General Public License v3.  See LICENSE
for a copy.
