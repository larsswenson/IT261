        <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <fieldset>
                <label for = "first_name">First Name</label>
                    <input type = "text" name = "first_name" value = "<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                        <span class = "error">
                        <?php echo $first_name_error; ?>
                        </span>
                <label for = "last_name">Last Name</label>
                    <input type = "text" name = "last_name" value = "<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                        <span class = "error">
                        <?php echo $last_name_error; ?>
                        </span>
                <label for = "email">Email</label>
                    <input type = "email" name = "email" value = "
                        <?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                        <span class = "error">
                        <?php echo $email_error; ?>
                        </span>
                <label for = "phone">Phone Number</label>
                    <input type = "tel" name = "phone" placeholder = "xxx-xxx-xxxx" value = "<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
                        <span class = "error">
                        <?php echo $phone_error; ?>
                        </span>
                <label for = "gender">Gender</label>
                    <ul>
                        <li><input type = "radio" name = "gender" value = "female" 
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') 
                                echo 'checked = "checked"'; ?>> Female</li>
                        <li><input type = "radio" name = "gender" value = "male" 
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') 
                                echo 'checked = "checked"'; ?>> Male</li>
                        <li><input type = "radio" name = "gender" value = "other" 
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') 
                                echo 'checked = "checked"'; ?>> Other</li>
                    </ul>
                <span class = "error">
            <?php echo $gender_error; ?>
        </span>
                <label for = "tacos">What kinds of tacos do you prefer?</label>
                    <ul>
                        <li><input type = "checkbox" name = "tacos[]" value = "al_pastor" 
                            <?php if (isset($_POST['tacos']) && in_array('al_pastor', $tacos)) 
                                echo 'checked = "checked"'; ?>> Al Pastor</li>
                        <li><input type = "checkbox" name = "tacos[]" value = "carne_asada" 
                            <?php if (isset($_POST['tacos']) && in_array('carne_asada', $tacos)) 
                                echo 'checked = "checked"'; ?>> Carne Asada</li>
                        <li><input type = "checkbox" name = "tacos[]" value = "chorizo" 
                            <?php if (isset($_POST['tacos']) && in_array('chorizo', $tacos)) 
                                echo 'checked = "checked"'; ?>> Chorizo</li>
                        <li><input type = "checkbox" name = "tacos[]" value = "carnitas" 
                            <?php if (isset($_POST['tacos']) && in_array('carnitas', $tacos)) 
                                echo 'checked = "checked"'; ?>> Carnitas</li>
                        <li><input type = "checkbox" name = "tacos[]" value = "pescado" 
                            <?php if (isset($_POST['tacos']) && in_array('pescado', $tacos)) 
                                echo 'checked = "checked"'; ?>> Pescado</li>
                    </ul>
                <span class = "error">
            <?php echo $tacos_error; ?>
        </span>
            <label for = "salsas">Salsas</label>
                <select name = "salsas">
                    <option value = "" NULL <?php if (isset($_POST['salsas']) && $_POST['salsas'] == NULL) 
                        echo 'selected = "unselected"'; ?>>Select One</option>
                    <option value = "verde" <?php if (isset($_POST['salsas']) && $_POST['salsas'] == 'verde') 
                        echo 'selected = "selected"'; ?>>Verde</option>
                    <option value = "roja" <?php if (isset($_POST['salsas']) && $_POST['salsas'] == 'roja') 
                        echo 'selected = "selected"'; ?>>Roja</option>
                    <option value = "habanero" <?php if (isset($_POST['salsas']) && $_POST['salsas'] == 'habanero') 
                        echo 'selected = "selected"'; ?>>Habanero</option>
                    <option value = "chipotle" <?php if (isset($_POST['salsas']) && $_POST['salsas'] == 'chipotle') 
                        echo 'selected = "selected"'; ?>>Chipotle</option>
                </select>
            <span class = "error">
            <?php echo $salsas_error; ?>
        </span>
            <label for = "comments">Comments</label>
                <textarea name = "comments"><?php if (isset($_POST['comments'])) 
                    echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span class = "error">
            <?php echo $comments_error; ?>
        </span>
            <label for = "privacy">Privacy</label>
                <ul>
                    <li><input type = "radio" name = "privacy" value = "agree" 
                        <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'agree') 
                    echo 'checked = "checked"'; ?>> I agree</li>
                </ul>
            <span class = "error">
            <?php echo $privacy_error; ?>
        </span>
            <input type = "submit" value = "Send it!">
                <p><a href = "">Reset</a></p>
            </fieldset>
        </form>
