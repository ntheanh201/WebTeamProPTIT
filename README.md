<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>WebTeamProPTIT</title>
  </head>
  <body>
    <script>
      (async () => {
        const response = await fetch(
          "https://api.github.com/repos/ntheanh201/WebTeamProPTIT/contents/"
        );
        const data = await response.json();
        let htmlString = "<ul>";
        for (let file of data) {
          htmlString += `<li><a href="${file.path}">${file.name}</a></li>`;
        }
        htmlString += "</ul>";
        document.getElementsByTagName("body")[0].innerHTML = htmlString;
      })();
    </script>
  </body>
</html>
