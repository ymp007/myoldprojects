    <div id="content">
    <h1>Account Sign Up</h1>
        <h3><?= $errors; ?></h3>
    <form action="." method="post">

    <fieldset>
    <legend>Account Information</legend>

        <label>E-Mail:</label>
        <input type="text" name="email" value="<?= $email; ?>" class="textbox"/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" value="<?= $password; ?>" class="textbox"/>
        <br />

        <label>Phone Number:</label>
        <input type="text" name="phone" value="<?= $phone ?>" class="textbox"/>
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine" <?=  ($heard_from == 'Search Engine') ? "checked" : ""; ?>/>
        Search engine<br />
        <input type="radio" name="heard_from" value="Friend" <?= ($heard_from == 'Friend') ? "checked" : ""; ?>/>
        Word of mouth<br />
        <input type=radio name="heard_from" value="Other" <?= ($heard_from == 'Other') ? "checked" : ""; ?>/>
        Other<br />

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates" <?= ($wants_updates == 'on') ? "checked" : ""; ?> />YES, I'd like to receive
        information about new products and special offers.<br />

        <p>Contact via:</p>

        <select name="contact_via">
            <?php
                $contact = ['email' => 'Email', 'text' => 'Text', 'phone' => 'Phone'];
                echo populateDropdown($contact, $contact_via);
            ?>
        </select>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"><?= $comments; ?></textarea>
    </fieldset>

    <input type="submit" value="Submit" name="register" />

    </form>

    </div>
