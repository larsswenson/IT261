        <footer>
            <ul>
                <li>Copyright &copy;
                    <?php
                        $date_current = date('Y');
                        $date_created = 2022;
                            if ($date_current == $date_created) {
                                echo $date_current;
                            } else {
                                echo '' . $date_created . ' - ' . $date_current . '';
                        }
            ?></li>
                    <li>All Rights Reserved</li>
                    <li><a href="../index.php">Web Design by Lars Swenson</a></li>
                    <li><a id="html-checker" href="#">HTML Validation</a></li>
                    <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
                <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
                </script>
        </footer>
  </body>
</html>