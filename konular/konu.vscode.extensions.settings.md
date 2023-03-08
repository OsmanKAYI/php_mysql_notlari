# VS Code Eklentileri

## Faydalı VS Code Eklentileri Listesi

- Auto Close Tag
  - Visual Studio IDE veya Sublime Text gibi HTML/XML kapatma etiketini otomatik olarak ekleyin.
- Auto Rename Tag
  - Eşleştirilmiş HTML/XML etiketini otomatik yeniden adlandırın.
- Code Runner
  - Birden fazla dil için kod parçacığı veya kod dosyası çalıştırın.
- Community Material Theme
  - Tam kaynak ağacı bağlamı ile IDE'nizde çekme isteklerini yönetin ve kod incelemeleri yapın. Sadece farkları değil, her satırı yorumlayın. İş akışınızın daha fazlasında tanımlamaya atlama, favori tuş atamalarınız ve kod zekasını kullanın.
- GistPad
  - GistPad, GitHub Gistlerini ve depolarını favori düzenleyicinizin rahatlığında düzenlemenizi sağlayan bir Visual Studio Code uzantısıdır.
- Github Pull Requests and Issues
  - Bu uzantı, Visual Studio Code'da GitHub çekme isteklerini ve sorunlarını incelemenizi ve yönetmenizi sağlar.
- indent-rainbow
  - Bu eklenti, metninizin önündeki girintiyi renklendirir ve her adımda dört farklı renk değiştirir. Bazıları Python, Nim, Yaml ve hatta muhtemelen girintiye bağlı olmayan dosya türleri için kod yazarken yararlı bulabilir.
- Inline fold
  - VS Code Inline Fold uzantısı, satır içi kod için VS Code'un katlama deneyimini taklit eder.
- Linter
  - Hepsi tek bir pakette, kod linting için uzantı. Yeni linterlar bir uzantı çerçevesi aracılığıyla kolayca eklenebilir.
- Live Server
  - Kodu kaydettiğinizde web sayfasını otomatik olarak yeniden yükler.
- Markdown Preview Enhanced
  - Markdown Preview Enhanced, otomatik kaydırma senkronizasyonu, matematik dizgi, mermaid, PlantUML, pandoc, PDF dışa aktarma, kod yığını, sunum yazarı vb. gibi birçok yararlı işlev sağlayan bir uzantıdır.
- Material Icon Theme
  - Bu uzantı, komut paletini kullanarak veya kullanıcı ayarları aracılığıyla varsayılan klasör simgesinin rengini, temasını vb. değiştirmenize olanak tanır.
- Peacock
  - Visual Studio Code çalışma alanınızın rengini ince bir şekilde değiştirin. Birden fazla VS Code örneğiniz olduğunda, VS Live Share kullandığınızda veya VS Code'un Remote özelliklerini kullandığınızda ve düzenleyicinizi hızlı bir şekilde tanımlamak istediğinizde idealdir.
- PHP Debug
  - Bu uzantı, Derick Rethans tarafından oluşturulmuş, VS Code ve Xdebug arasında bir hata ayıklama bağdaştırıcısıdır. Xdebug, sunucunuza yüklenmesi gereken bir PHP uzantısıdır (Linux'ta bir .so dosyası ve Windows'ta bir .dll).
- PHP IntelliSense
  - PHP için gelişmiş bir otomatik tamamlama ve yeniden düzenleme desteğidir.
- PHP Snippets
  - Bu eklenti, daha hızlı yazmanıza yardımcı olmak için PHP ve diğer çerçeveler için kod parçacıkları içerir.
- Prettier-Code formatter
  - Prettier, fikir sahibi bir kod biçimlendiricidir. Kodunuzu ayrıştırarak ve maksimum satır uzunluğunu dikkate alan kendi kurallarıyla yeniden yazdırarak, gerektiğinde kodu sararak tutarlı bir stil uygular.
- Project Manager
  - Nerede olurlarsa olsunlar projelerinize kolayca erişmenize yardımcı olur. Artık o önemli projeleri kaçırmayın.
- Rainbow CSV
  - Kodlarınızı, yazılarınızı, dosyalarınızı vb. renkli hale getirerek daha okunabilir hale getirir.
- vscode-pdf
  - VSCode'da pdf görüntülemenize yardımcı olur.
- Vue Language Features (Volar)
  - Vue Dil Özellikleri, Vue, Vitepress ve petite-vue için oluşturulmuş bir dil desteği uzantısıdır. Bu, yerel TypeScript dili hizmet düzeyi performansını uygulamak için her şeyi isteğe bağlı olarak hesaplamak için @vue/reactivity'ye dayanır.
- WakaTime
  - WakaTime, programlama etkinliğinizden otomatik olarak oluşturulan ölçümler, içgörüler ve zaman takibi için açık kaynaklı bir VS Code eklentisidir.
- TODO Highlight
  - Kodunuzdaki TODO, FIXME ve diğer ek açıklamaları vurgulayın Bazen kodu üretime yayınlamadan önce kodlama sırasında eklediğiniz TODO'ları gözden geçirmeyi unutursunuz. Bu yüzden uzun zamandır bunları vurgulayan ve bana henüz yapılmamış notlar veya şeyler olduğunu hatırlatan bir uzantı istiyordum. Umarım bu eklenti size de yardımcı olur.
- Todo Tree
  - Bu uzantı, çalışma alanınızda TODO ve FIXME gibi yorum etiketlerini hızlı bir şekilde arar (ripgrep kullanarak) ve bunları etkinlik çubuğunda bir ağaç görünümünde görüntüler. Görünüm, etkinlik çubuğundan gezgin bölmesine (veya olmasını tercih ettiğiniz başka bir yere) sürüklenebilir

#### Project Manager için projects.json Dosya İçeriği

- Ayarlarınızı yapılandırmak için `Proje Yöneticisi`ne tıklayın: Projeleri Düzenle` (bir kalem gibi) üzerine tıklayın ve aşağıdaki kodları durumlara göre düzenleyin.

```BASH
[
  {
    "name": "project1",
    "rootPath": "/foler/to/path/projectname1",
    "tags": [],
    "enabled": true
  },
  {
      "name": "project2",
      "rootPath": "/foler/to/path/projectname2",
      "tags": [],
      "enabled": true
  }
]
```

- Proje yöneticisinin git projeleriniz için nereye bakması gerektiğini belirlemek için `Ayarları Aç`a tıklayın ve `projectManager.git.basefolders` yazın.
- Sahip olduğunuz dizinleri yazın ve `Öğe Ekle`ye basın.

#### setting.json Dosya İçeriği

```BASH
///////////////////////// VISUAL STUDIO CODE /////////////////////////
///////////////////////// VISUAL STUDIO CODE /////////////////////////
///////////////////////// VISUAL STUDIO CODE /////////////////////////
{
  // The number of spaces a tab is equal to. This setting is overridden
  // based on the file contents when `editor.detectIndentation` is true.
  "editor.tabSize": 2,

  // Insert spaces when pressing Tab. This setting is overriden
  // based on the file contents when `editor.detectIndentation` is true.
  "editor.insertSpaces": true,

  // When opening a file, `editor.tabSize` and `editor.insertSpaces`
  // will be detected based on the file contents. Set to false to keep
  // the values you've explicitly set, above.
  "editor.detectIndentation": false,

  // The window zoom level configuration (default is 0)
  "window.zoomLevel": 0,

  // Font size configuration
  "editor.fontSize": 18,

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

  ///////////////////////// indent-rainbow /////////////////////////
  ///////////////////////// indent-rainbow /////////////////////////
  ///////////////////////// indent-rainbow /////////////////////////
  // For which languages indent-rainbow should be activated (if empty it means all).
  "indentRainbow.includedLanguages": [], // for example ["nim", "nims", "python"]

  // For which languages indent-rainbow should be deactivated (if empty it means none).
  "indentRainbow.excludedLanguages": ["plaintext"],

  // The delay in ms until the editor gets updated.
  "indentRainbow.updateDelay": 100, // 10 makes it super fast but may cost more resources

  // Defining custom colors instead of default "Rainbow" for dark backgrounds.
  "indentRainbow.colors": [
    "rgba(255,255,64,0.07)",
    "rgba(127,255,127,0.07)",
    "rgba(255,127,255,0.07)",
    "rgba(79,236,236,0.07)"
  ],

  // The indent color if the number of spaces is not a multiple of "tabSize".
  "indentRainbow.errorColor": "rgba(128,32,32,0.6)",

  // The indent color when there is a mix between spaces and tabs.
  // To be disabled this coloring set this to an empty string.
  "indentRainbow.tabmixColor": "rgba(128,32,96,0.6)",

  ///////////////////////// Inline fold /////////////////////////
  ///////////////////////// Inline fold /////////////////////////
  ///////////////////////// Inline fold /////////////////////////
  "inlineFold.regex": "(class|className)=[`'{\"](https://github.com/moalamri/vscode-inline-fold/blob/HEAD/[^`'\"}]{30,})[`'\"}]",
  "inlineFold.regexFlags": "g",
  "inlineFold.regexGroup": 2,
  "inlineFold.unfoldedOpacity": 0.6,
  "inlineFold.maskChar": "…",
  "inlineFold.maskColor": "#000",
  "inlineFold.supportedLanguages": ["javascriptreact", "typescriptreact"],
  "inlineFold.unfoldOnLineSelect": true,
  "inlineFold.autoFold": true,

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
  "editor.multiCursorModifier": "ctrlCmd",

  ///////////////////////// PHP Debug /////////////////////////
  ///////////////////////// PHP Debug /////////////////////////
  ///////////////////////// PHP Debug /////////////////////////
  "xdebug.mode": "debug",
  "xdebug.start_with_request": "yes",

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
      "isWholeLine": false
    },
    {
      "text": "TODO:",
      "color": "red",
      "border": "1px solid red",
      "borderRadius": "2px", //NOTE: using borderRadius along with `border` or you will see nothing change
      "backgroundColor": "rgba(0,0,0,.2)"
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
    "isWholeLine": true
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
  "editor.formatOnType": true,
  "editor.formatOnPaste": true,
  "projectManager.git.baseFolders": ["folder/to/path1", "folder/to/path2"],
  "editor.formatOnSave": true
}
```
