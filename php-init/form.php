<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .spacer {
            height: .5rem;
        }

        .max {
            max-width: 320px
        }
    </style>
</head>

<body>
    <!-- <form method="get" action="process_form.php"> -->
    <form method="post" action="process_form.php">
        <fieldset class="max">
            <legend>Article</legend>
            <div>
                <input autofocus placeholder="title" id="namos" type="text" name="title">
                <label for="namos">title w label</label>
            </div>
            <div class="spacer"></div>
            <div><label><input placeholder="content" type="text" name="content"> content label-wrapper</label></div>
        </fieldset>
        <div class="spacer"></div>
        <div style="margin:4px">
            <label for="lang">Language: </label>
            <select id="lang" name="lang">
                <!-- <select name="lang[]" multiple> -->
                <option value="" selected disabled hidden>Choose here</option>
                <optgroup label="red">
                    <option value="English">English</option>
                    <option value="German">German</option>
                </optgroup>
                <optgroup label="green">
                    <option value="Russian">Russian</option>
                    <option disabled value="Japan">Japan</option>
                </optgroup>
            </select>
        </div>
        <div class="spacer"></div>
        <div>
            <input id="testo1" type="checkbox" checked name="isagree[]" value="yse">
            <label for="testo1">I agree</label>
        </div>
        <div class="spacer"></div>
        <div>
            <input type="checkbox" name="isagree[]" value="yse">
            disagree w/o label
        </div>
        <div class="spacer"></div>
        <div class="">
            <p>Choose a color: </p>
            <input type="radio" value="blue" name="colory" id="color_blue">
            <label for="color_blue">blue</label>
            <br>
            <input type="radio" value="red" name="colory" id="color_red">
            <label for="color_red">red</label>
            <br>
            <input type="radio" value="green" name="colory" id="color_green">
            <label for="color_green">green</label>
        </div>
        <div class="spacer"></div>
        <fieldset class="max">
            <legend>User info</legend>
            <div>
                <input title="Please enter valid Russian format!" name="postcode" type="text" pattern="\d{6}" required>
                postcode
            </div>
            <div class="spacer"></div>
            <div>
                <input name="email" type="email" required> email
            </div>
            <div class="spacer"></div>
            <div>
                <input placeholder="http://example.com" name="url" type="url" required> url
            </div>
            <div class="spacer"></div>
            <div>
                <input name="count" type="number" min="1" max="10" required> number
            </div>
        </fieldset>
        <button style="margin-top: 10px">Send</button>
    </form>
</body>

</html>