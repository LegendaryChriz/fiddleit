  <footer>
    <h3 class="toolbar-item">&nbsp;&nbsp;&nbsp;<span class="footer-classic">© <?php echo date("Y") ?></span> fiddleit</h3>
    <h3 style="float:right" class="toolbar-item"><span class="footer-classic"><a href="/main/credits.php"><?php echo $text["credits"] ?></a></span></h3>
    <h3 style="float:right" class="toolbar-item"><span class="footer-classic"><a href="/main/contact.php"><?php echo $text["contact"] ?></a></span></h3>
    <h3 style="float:right" class="toolbar-item"><span class="footer-classic"><a href="/main/privacy.php"><?php echo $text["privacy"] ?></a></span></h3>
  </footer>

  <script>
    // https://www.w3schools.com/html/html5_webstorage.asp
    if (typeof(Storage) == "undefined") {
      alert("Sorry! No Web Storage support..");
    }
  </script>
  <script src="https://kit.fontawesome.com/9a604f5e19.js" crossorigin="anonymous"></script>
  <!-- Prism JS -->
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-core.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
</body>

</html>