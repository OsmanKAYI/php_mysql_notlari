# VS Code Eklentileri

### Faydalı VS Code Eklentileri Listesi

- Auto Close Tag
- Auto Rename Tag
- Code Runner
- Community Material Theme
- Github Pull Requests and Issues
- Linter
- Live Server
- Markdown Preview Enhanced
- Material Icon Theme
- PHP Debug
- PHP IntelliSense
- PHP Snippets
- Prettier-Code formatter
- Vue Language Features (Volar)
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
    
    
    ///////////////////////// Code Runner /////////////////////////
    ///////////////////////// Code Runner /////////////////////////
    ///////////////////////// Code Runner /////////////////////////
    "code-runner.executorMap": {
        "javascript": "node",
        "php": "C:\\php\\php.exe",
        "python": "python",
        "perl": "perl",
        "ruby": "C:\\Ruby23-x64\\bin\\ruby.exe",
        "go": "go run",
        "html": "\"C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe\"",
        "java": "cd $dir && javac $fileName && java $fileNameWithoutExt",
        "c": "cd $dir && gcc $fileName -o $fileNameWithoutExt && $dir$fileNameWithoutExt"
    },
    

    ///////////////////////// Community Material Theme /////////////////////////
    ///////////////////////// Community Material Theme /////////////////////////
    ///////////////////////// Community Material Theme /////////////////////////
    "git.confirmSync": false,
    "workbench.iconTheme": "material-icon-theme",
    "security.workspace.trust.untrustedFiles": "open",
    "workbench.colorTheme": "Community Material Theme Darker High Contrast",
    //"editor.lineHeight": 25,
    

    ///////////////////////// GitHub Pull Requests and Issues /////////////////////////
    ///////////////////////// GitHub Pull Requests and Issues /////////////////////////
    ///////////////////////// GitHub Pull Requests and Issues /////////////////////////
    "githubPullRequests.queries": [
        {
            "label": "Waiting For My Review",
            "query": "is:open review-requested:${user}"
        },
        {
            "label": "Assigned To Me",
            "query": "is:open assignee:${user}"
        },
        {
            "label": "Created By Me",
            "query": "is:open author:${user}"
        },
        {
            "label": "Mentioned Me",
            "query": "is:open mentions:${user}"
        }
    ],
    
        
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
    "terminal.integrated.enableMultiLinePasteWarning": false,
    "terminal.integrated.defaultProfile.windows": "Git Bash",
    "workbench.startupEditor": "none",
    "editor.mouseWheelZoom": true,
    "window.zoomLevel": 1,
    "editor.multiCursorModifier": "ctrlCmd",
    

    ///////////////////////// PHP Debug /////////////////////////
    ///////////////////////// PHP Debug /////////////////////////
    ///////////////////////// PHP Debug /////////////////////////
    "xdebug.mode" : "debug",
    "xdebug.start_with_request" : "yes",

    ///////////////////////// Prettier-Code formatter /////////////////////////
    ///////////////////////// Prettier-Code formatter /////////////////////////
    ///////////////////////// Prettier-Code formatter /////////////////////////
    "editor.defaultFormatter": "esbenp.prettier-vscode",
    "[javascript]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode",
        "editor.formatOnSave": true
    },

    
    ///////////////////////// Todo Highlight /////////////////////////
    ///////////////////////// Todo Highlight /////////////////////////
    ///////////////////////// Todo Highlight /////////////////////////
    "todohighlight.isEnable": true,
    "todohighlight.isCaseSensitive": true,
    "todohighlight.keywords": [
        "DEBUG:",
        "REVIEW:",
        {
            "text": "NOTE:",
            "color": "#ff0000",
            "backgroundColor": "yellow",
            "overviewRulerColor": "grey"
        },
        {
            "text": "HACK:",
            "color": "#000",
            "isWholeLine": false,
        },
        {
            "text": "TODO:",
            "color": "red",
            "border": "1px solid red",
            "borderRadius": "2px", //NOTE: using borderRadius along with `border` or you will see nothing change
            "backgroundColor": "rgba(0,0,0,.2)",
            //other styling properties goes here ... 
        }
    ],
    "todohighlight.keywordsPattern": "TODO:|FIXME:|\\(([^)]+)\\)", //highlight `TODO:`,`FIXME:` or content between parentheses
    "todohighlight.defaultStyle": {
        "color": "red",
        "backgroundColor": "#ffab00",
        "overviewRulerColor": "#ffab00",
        "cursor": "pointer",
        "border": "1px solid #eee",
        "borderRadius": "2px",
        "isWholeLine": true,
        //other styling properties goes here ... 
    },
    "todohighlight.include": [
        "**/*.js",
        "**/*.jsx",
        "**/*.ts",
        "**/*.tsx",
        "**/*.html",
        "**/*.php",
        "**/*.css",
        "**/*.scss"
    ],
    "todohighlight.exclude": [
        "**/node_modules/**",
        "**/bower_components/**",
        "**/dist/**",
        "**/build/**",
        "**/.vscode/**",
        "**/.github/**",
        "**/_output/**",
        "**/*.min.*",
        "**/*.map",
        "**/.next/**"
    ],
    "todohighlight.maxFilesForSearch": 5120,
    "todohighlight.toggleURI": false,
    

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
}
```