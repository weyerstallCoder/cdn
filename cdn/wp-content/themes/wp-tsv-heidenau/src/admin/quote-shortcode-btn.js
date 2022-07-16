(function () {
  tinymce.create('tinymce.plugins.Quote', {
    init: function (ed, url) {
      ed.addButton('quote_block', {
        title: 'Zitat hinzufügen',
        cmd: 'quote_block',
        image: "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cGF0aCBkPSJNMTY1NjcsODgwMGgtMTJhNC4wMDYsNC4wMDYsMCwwLDEtNC00di0xMmE0LjAwNiw0LjAwNiwwLDAsMSw0LTRoMTJhNC4wMDUsNC4wMDUsMCwwLDEsNCw0djEyQTQuMDA1LDQuMDA1LDAsMCwxLDE2NTY3LDg4MDBabS05LjU0NS04LjY1OWE1Ljk4NCw1Ljk4NCwwLDAsMS0uMzQyLDQuMDE4LDYuOTExLDYuOTExLDAsMCwwLDMuMzczLTUuNTM5di01LjE3OGgtNi42Nzh2Ni43Wm03LjY4MiwwYTYuMDQzLDYuMDQzLDAsMCwxLS4zNSwzLjk4NCw2Ljg4NSw2Ljg4NSwwLDAsMCwzLjM2OS01LjQ2NWwuMDM3LS4wNDF2LTUuMTc4aC02LjY4NHY2LjdaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTY1NTEgLTg3NzkuOTk5KSIgZmlsbD0iIzE3MzY5MSIvPjwvc3ZnPg==",
      });

      ed.addCommand('quote_block', function () {
        ed.windowManager.open({
          title: 'Zitat-Daten eingeben',
          body: [{
            type: 'textbox',
            name: 'quotetext',
            placeholder: 'Text eingeben',
            multiline: true,
            minWidth: 700,
            minHeight: 60,
          }, {
            type: 'textbox',
            name: 'from',
            placeholder: 'Zitat von:',
            multiline: true,
            minWidth: 700,
            minHeight: 30,
          }],
          onsubmit: function (e) {
            ed.insertContent('[quote-box text="' + e.data.quotetext + '" from="' + e.data.from + '"]');
          }
        });
      });
    },
  });
  tinymce.PluginManager.add('quote_block', tinymce.plugins.Quote);
})();