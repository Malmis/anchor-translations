<?php

return array(

	'users' => 'Anv&auml;ndare',

	'create_user' => 'Skapa ny anv&auml;ndare',
	'add_user' => 'L&auml;gg till en ny anv&auml;ndare',
	'editing_user' => '&auml;ndrar %s&rsquo;s profil',
	'remembered' => 'Jag kan mitt l&ouml;senord',
	'forgotten_password' => 'Gl&ouml;mt l&ouml;senordet?',

	// roles
	'administrator' => 'Administrat&ouml;r',
	'administrator_explain' => '',

	'editor' => 'F&ouml;rfattare',
	'editor_explain' => '',

	'user' => 'Anv&auml;ndare',
	'user_explain' => '',

	// form fields
	'real_name' => 'Namn',
	'real_name_explain' => 'Anv&auml;ndarens riktiga namn. Anv&auml;nds i f&ouml;rfattarsignaturen (publikt synlig).',	

	'bio' => 'Biografi',
	'bio_explain' => 'En kort anv&auml;ndarbiografi. Du kan anv&auml;nda giltig HTML.',

	'status' => 'Status',
	'status_explain' => '',

	'role' => 'Roll',
	'role_explain' => 'Anv&auml;ndarens roll. Se <a href="//anchorcms.com/docs/roles">dokumentationen</a> f&ouml;r mer information.',

	'username' => 'Anv&auml;ndarnamn',
	'username_explain' => '&Ouml;nskat anv&auml;ndarnamn. Kan &auml;ndras vid ett senare tillf&auml;lle.',
	'username_missing' => 'V&auml;nligen ange ett anv&auml;ndarnamn, m&aring;ste inneh&aring;lla minst %s tecken.',
	'username_exists' => 'Anv&auml;ndarnamnet &auml;r upptaget.',

	'password' => 'L&ouml;senord',
	'password_explain' => '&Ouml;nskat l&ouml;senord. &Auml;ven detta kan &auml;ndras vid ett senare tillf&auml;lle.',
	'password_too_short' => 'L&ouml;senord m&aring;ste inneh&aring;lla minst %s tecken',

	'new_password' => 'Nytt l&ouml;senord',

	'email' => 'Email',
	'email_explain' => 'Anv&auml;ndarens email-adress. M&aring;ste anges ifall anv&auml;ndaren skulle gl&ouml;mma sitt l&ouml;senord.',
	'email_missing' => 'Var god ange en giltig email-adress',
	'email_not_found' => 'Profilen finns inte.',

	// messages
	'updated' => 'Anv&auml;ndaren har uppdaterats.',
	'created' => 'En ny anv&auml;ndare har lagts till.',
	'deleted' => 'Anv&auml;ndaren har tagits bort.',
	'delete_error' => 'Du kan inte radera din egen profil',
	'login_error' => 'Anv&auml;ndaren eller l&ouml;senordet &auml;r felaktigt.',
	'logout_notice' => 'Du &auml;r nu utloggad.',
	'recovery_sent' => 'Vi har skickat ett email f&ouml;r att bekr&auml;fta ditt l&ouml;senordsbyte.',
	'recovery_expired' => 'L&ouml;senords&aring;terst&auml;llningen har g&aring;tt ut, v&auml;nligen f&ouml;rs&ouml;k igen.',
	'password_reset' => 'Ditt l&ouml;senord &auml;r nu &auml;ndrat. Nu kan du logga in!',	
	
	// password recovery email
	'recovery_subject' => 'L&ouml;senords&aring;terst&auml;llning',
	'recovery_message' => 'Du har beg&auml;rt att ditt l&ouml;senord ska &aring;terst&auml;llas.' .
		'F&ouml;r att forts&auml;tta, var god f&ouml;lj l&auml;nken nedan.' . PHP_EOL . '%s',

);