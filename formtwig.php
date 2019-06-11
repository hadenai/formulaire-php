

<div class="container">
    <h3> Contactez nous! </h3>
</div>
<div class="container">
    <div class="row">
        <form action="" method="post" class="col-12">
            <div class="form-group">
                <label for="first-name">First-name </label>
                <input type="text" value="{{ item.first-name }}" id="first-name" name="first-name">
                {% if firstName is defined %}
                <div class="text-danger">{{ FirstNameError }} </div>
                {% endif %}
            </div>
            <div class="form-group">
                <label for="last-name">Last-name </label>
                <input type="text" value="{{ item.last-name }}" id="last-name" name="last-name">
                {% if lastName is defined %}
                <div class="text-danger">{{ LastNameError }} </div>
                {% endif %}
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="text" value="{{ item.email }}" id="email" name="email">
                {% if email is defined %}
                <div class="text-danger">{{ EmailNameError }} </div>
                {% endif %}
            </div>
            <div class="form-group">
                <label for="your-message">Your-message</label>
                <textarea name="your-message" id="your-message" rows="3" class="form-control"></textarea>
                {% if YourMessage is defined %}
                <div class="text-danger">{{ YourMessageError }} </div>
                {% endif %}
                <button class="btn btn-success" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-2"><a href="https://twitter.com/?lang=fr"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554902999-twitter-1.png" alt="logo.twitter" ></a></div>
        <div class="col-lg-2"><a href="https://fr-fr.facebook.com/"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554903375-facebook-logo.png" alt="logo.facebook" ></a></div>
        <div class="col-lg-2"><a href="https://www.youtube.com/"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554903591-youtube.png" alt="logo.youtube" ></a></div>
        <div class="col-lg-2"><a href="https://www.linkedin.com/"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554903846-linkedin-big-logo.png" alt="logo.linkedin" ></a></div>
        <div class="col-lg-2"><a href="https://www.instagram.com/?hl=fr"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554904043-instagram.png" alt="logo.instagram" ></a></div>
        <div class="col-lg-2"><a href="https://www.pinterest.fr/"><img src="https://image.noelshack.com/fichiers/2019/15/3/1554904814-pinterest.png" alt="logo.pinterest" ></a></div>
    </div>
</div>

