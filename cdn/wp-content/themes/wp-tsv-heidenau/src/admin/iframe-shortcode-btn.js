(function () {
  tinymce.create('tinymce.plugins.Iframe', {
    init: function (ed, url) {
      ed.addButton('iframe_embed_block', {
        title: 'Iframe einbinden',
        cmd: 'iframe_embed_block',
        image: "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cGF0aCBkPSJNMTY1NjcsODgwMGgtMTJhNC4wMDYsNC4wMDYsMCwwLDEtNC00di0xMmE0LjAwNiw0LjAwNiwwLDAsMSw0LTRoMTJhNC4wMDUsNC4wMDUsMCwwLDEsNCw0djEyQTQuMDA1LDQuMDA1LDAsMCwxLDE2NTY3LDg4MDBabS0xMC42ODQtMTUuNWExLjU2MywxLjU2MywwLDAsMC0xLjU2NCwxLjU2djcuODFhMS41NjMsMS41NjMsMCwwLDAsMS41NjQsMS41Nmg5LjM2OWExLjU2MSwxLjU2MSwwLDAsMCwxLjU1OS0xLjU2di03LjgxYTEuNTYxLDEuNTYxLDAsMCwwLTEuNTU5LTEuNTZabTguNTg4LDMuMTIzaC03LjgwN2EuNzgyLjc4MiwwLDAsMSwwLTEuNTYzaDcuODA3YS43ODIuNzgyLDAsMCwxLDAsMS41NjNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTY1NTEgLTg3NzkuOTk5KSIgZmlsbD0iIzE3MzY5MSIvPjwvc3ZnPg==",
      });

      ed.addCommand('iframe_embed_block', function () {
        ed.windowManager.open({
          title: 'Iframe Daten eingeben',
          body: [{
            type: 'textbox',
            name: 'url',
            placeholder: 'URL eingeben',
            multiline: true,
            minWidth: 700,
            minHeight: 30,
          }],
          onsubmit: function (e) {
            ed.insertContent('[iframe-embed url="' + e.data.url + '"]');
          }
        });
      });
    },
  });
  tinymce.PluginManager.add('iframe_embed_block', tinymce.plugins.Iframe);
})();