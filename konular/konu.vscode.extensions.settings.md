# VS Code Eklentileri

### Faydalı VS Code Eklentileri Listesi

- Auto Close Tag
- Auto Rename Tag
- Code Runner
- Community Material Theme
- Github Pull Requests and Issues
- Live Server
- Markdown Preview Enhanced
- Material Icon Theme
- PHP Snippets
- Prettier - Code formatter
- Linter
- WakaTime
- TODO Highlight
- Todo Tree

### setting.json Dosya İçeriği
```BASH
{
    // The number of spaces a tab is equal to. This setting is overridden
    // based on the file contents when `editor.detectIndentation` is true.
    "editor.tabSize": 4,

    // Insert spaces when pressing Tab. This setting is overriden
    // based on the file contents when `editor.detectIndentation` is true.
    "editor.insertSpaces": true,

    // When opening a file, `editor.tabSize` and `editor.insertSpaces`
    // will be detected based on the file contents. Set to false to keep
    // the values you've explicitly set, above.
    "editor.detectIndentation": false, 


    ///////////////////////// Community Material Theme /////////////////////////
    ///////////////////////// Community Material Theme /////////////////////////
    ///////////////////////// Community Material Theme /////////////////////////
    "git.confirmSync": false,
    "workbench.iconTheme": "material-icon-theme",
    "security.workspace.trust.untrustedFiles": "open",
    "workbench.colorTheme": "Community Material Theme Darker High Contrast",
    //"editor.lineHeight": 25,


    ///////////////////////// Todo Tree /////////////////////////
    ///////////////////////// Todo Tree /////////////////////////
    ///////////////////////// Todo Tree /////////////////////////
    "todo-tree.highlights.defaultHighlight": {
        "icon": "alert",
        "type": "text",
        "foreground": "#ff0000",
        "background": "#fdfdfd",
        "opacity": 50,
        "iconColour": "#004cff"
    },
    "todo-tree.highlights.customHighlight": {
        "TODO": {
            "icon": "check",
            "type": "line"
        },
        "FIXME": {
            "foreground": "#000000",
            "iconColour": "#e3eb00",
            "gutterIcon": true
        }
    },
    "editor.linkedEditing": true,
    "liveServer.settings.donotShowInfoMsg": true,


    ///////////////////////// Prettier /////////////////////////
    ///////////////////////// Prettier /////////////////////////
    ///////////////////////// Prettier /////////////////////////
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "[javascript]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },

    
    ///////////////////////// Matertial Icon Theme /////////////////////////
    ///////////////////////// Matertial Icon Theme /////////////////////////
    ///////////////////////// Matertial Icon Theme /////////////////////////
    "material-icon-theme.folders.color": "#ef5350",
    "material-icon-theme.folders.theme": "specific",
    "material-icon-theme.opacity": 1,
    "material-icon-theme.saturation": 1,
    "explorer.confirmDelete": false,
    "editor.unicodeHighlight.allowedLocales": {
        "tr": true
    },
    "window.zoomLevel": 1,
    "terminal.integrated.enableMultiLinePasteWarning": false,
    "terminal.integrated.defaultProfile.windows": "Git Bash",
}
```