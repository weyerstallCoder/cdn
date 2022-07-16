(function () {
  tinymce.create('tinymce.plugins.Youtube', {
    init: function (ed, url) {
      ed.addButton('youtube_embed_block', {
        title: 'YouTube Video einbinden',
        cmd: 'youtube_embed_block',
        image: "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cGF0aCBkPSJNMTY1NjcsODgwMGgtMTJhNC4wMDYsNC4wMDYsMCwwLDEtNC00di0xMmE0LjAwNiw0LjAwNiwwLDAsMSw0LTRoMTJhNC4wMDUsNC4wMDUsMCwwLDEsNCw0djEyQTQuMDA1LDQuMDA1LDAsMCwxLDE2NTY3LDg4MDBabS02LTE1LjA2YTQyLjg0Nyw0Mi44NDcsMCwwLDAtNS42MjMuMywxLjc5MSwxLjc5MSwwLDAsMC0xLjI2OCwxLjI4MSwyMC4yMzEsMjAuMjMxLDAsMCwwLDAsNi45NzQsMS43NzMsMS43NzMsMCwwLDAsMS4yNjgsMS4yNjEsNTMuMDU0LDUzLjA1NCwwLDAsMCwxMS4yNDYsMCwxLjc5MSwxLjc5MSwwLDAsMCwxLjI3My0xLjI2MSwyMC4yMzEsMjAuMjMxLDAsMCwwLDAtNi45NzQsMS44MTYsMS44MTYsMCwwLDAtMS4yNzMtMS4yODFBNDIuODQ3LDQyLjg0NywwLDAsMCwxNjU2MSw4Nzg0LjkzOVptLTEuNDczLDcuMjEydi00LjI3OWwzLjc2NCwyLjEzOC0zLjc2MiwyLjE0MVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNjU1MSAtODc3OS45OTkpIiBmaWxsPSIjMTczNjkxIi8+PC9zdmc+",
      });

      ed.addCommand('youtube_embed_block', function () {
        ed.windowManager.open({
          title: 'YouTube Daten eingeben',
          body: [{
            type: 'textbox',
            name: 'url',
            placeholder: 'URL eingeben',
            multiline: true,
            minWidth: 700,
            minHeight: 30,
          }, {
            type: 'textbox',
            name: 'description',
            placeholder: 'Kurzbeschreibung',
            multiline: true,
            minWidth: 700,
            minHeight: 30,
          }],
          onsubmit: function (e) {
            ed.insertContent('[youtube-embed url="' + e.data.url + '" description="' + e.data.description + '"]');
          }
        });
      });
    },
  });
  tinymce.PluginManager.add('youtube_embed_block', tinymce.plugins.Youtube);
})();