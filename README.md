# Index

This is a simple, yet highly customizable start page based on PHP and jQuery. It supports quick
navigation via hotkeys and can be extended with plug-ins.

![Screenshot](https://github.com/pille1842/index/raw/master/screenshot.png)

## Installation

Place the files in a folder of your choosing inside your document root. Then rename the
`index.json.example` file to `index.json` or create a new file based on it. There needs to be
a valid JSON file called `index.json` in the same directory as `index.php`.

That's it! You should be good to go.

## Using the index

Every link in your index is part of a group. When you hit the hotkey of a group, it gets
expanded and you can use the hotkeys defined for the links in it to open a new tab or window
with that link.

This means that you can re-use hotkeys in other groups (for example `f` for Facebook in
your "Social Networks" group and also `f` for /r/funny in your Reddit group). You shouldn't use
group hotkeys for links, though, since group hotkeys are always active and you'd probably run into
unwanted side effects.

## Customization

Set the links to your liking in the `index.json` file. Hotkeys are parsed by [jeresig/jquery.hotkeys](https://github.com/jeresig/jquery.hotkeys),
so you can also use combinations like `shift+g` or `alt+ctrl+a` in your hotkey definitions. Have
a look at the README of the `jquery.hotkeys` project for a deeper look into this matter.

There are two hooks for plug-ins in your `index.json`: `plugins-top` and `plugins-bottom`. These get
called before and after the link groups are drawn. So if you want a plug-in to appear before
the link groups, insert it into `plugins-top`. Both of these variables are simply arrays of plug-in
names. Each plug-in needs to have at least a template file in the `plugins/` directory that's named
`NAME-OF-PLUGIN.tpl.php`. You can also have one CSS and one JavaScript file in the `assets/plugins/`
directory, named `NAME-OF-PLUGIN.css` and `NAME-OF-PLUGIN.js`, but these are optional.

Since this project is work-in-progress, there's only a subreddit quickjump plug-in as of now. If you
have ideas for useful plug-ins this project could ship by default, I'd appreciate a pull request!

## License

This project is licensed unter the GNU General Public License v3. See LICENSE for a copy.
