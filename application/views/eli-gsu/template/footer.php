            <!-- this is a footer -->
            <style>
footer {
  text-align: center;
  padding: 10px 0;
  background-color: #f0f0f0;
  margin-top: auto;
  margin-bottom: 1px; 
}

.footer-line {
  width: 50px;
  height: 1px;
  background-color: #333;
  margin: 0 auto 7px auto;
}

.footer-content p {
  margin: 0;
  font-size: 12px;
  color: #555;
}

.social-links {
  margin-top: 4px;
}

.social-links p {
  display: inline-block;
  margin: 0;
}

.social-links img {
  width: 20px;
  height: 20px;
  vertical-align: middle;
}
p[data-tooltip] {
  position: relative;
}

p[data-tooltip]:before {
  content: attr(data-tooltip);
  position: absolute;
  bottom: 100%; /* Position above the link */
  left: 50%;
  transform: translateX(-50%);
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
  font-size: 12px;
  opacity: 0; /* Initially hidden */
  visibility: hidden; /* Initially hidden */
  transition: opacity 0.3s, visibility 0.3s;
}

p[data-tooltip]:hover:before {
  opacity: 1; /* Show the tooltip on hover */
  visibility: visible; /* Show the tooltip on hover */
}
</style>



<footer>
    <div class="footer-line"></div>
    <div class="footer-content">
      <p>4BHive EMB MIMAROPA © 2023 All Rights Reserved.</p>
      <p>Design and code by Eli ☺</p>
      <div class="social-links">
        <p data-tooltip="eliza_dizon@emb.gov.ph"><img src="assets/img/outlook.png" alt="Facebook"></p>
        <p data-tooltip="eliza099"><img src="assets/img/messenger.png" alt="Twitter"></p>
      </div>
    </div>
  </footer>
<!-- this is a footer -->

<!-- Latest compiled JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-KyZXEAgKXFOt0Pyav2TlLxCRvKGeOdNQs4j1al8F1jw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<!-- <script>
         $(document).ready(function()
        {
            $('edit_button').click(function (e) { 
                e.preventDefault();
                alert('hello')
            });
        })
       
</script> -->
</body>
</html>