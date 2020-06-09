<?php
/**
 * markasjunk configuration file
 */

// Learning driver
// Use an external process such as sa-learn to learn from spam/ham messages. Default: null.
// Please see the README for more information
$config['markasjunk_learning_driver'] = 'dir_learn';

// Ham mailbox
// Mailbox messages should be moved to when they are marked as ham. null = INBOX
// set to FALSE to disable message moving
$config['markasjunk_ham_mbox'] = NULL;

// Spam mailbox
// Mailbox messages should be moved to when they are marked as spam.
// null = the mailbox assigned as the spam folder in Roundcube settings
// set to FALSE to disable message moving
$config['markasjunk_spam_mbox'] = NULL;

// Mark messages as read when reporting them as spam
$config['markasjunk_read_spam'] = true;

// Mark messages as unread when reporting them as ham
$config['markasjunk_unread_ham'] = false;

// Add flag to messages marked as spam (flag will be removed when marking as ham)
// If you do not want to use message flags set this to null
$config['markasjunk_spam_flag'] = 'Junk';

// Add flag to messages marked as ham (flag will be removed when marking as spam)
// If you do not want to use message flags set this to null
$config['markasjunk_ham_flag'] = NULL;

// Write output from spam/ham commands to the log for debug
$config['markasjunk_debug'] = false;

// Show icon on toolbar
// The mark as spam/ham icon can either be displayed on the toolbar or as part of the mark messages menu
// 0 - always show in mark message menu
// 1 - always show on toolbar
// 2 - show in toolbar on mailbox screen, show in mark message menu message on screen
// 3 - show in mark message menu on mailbox screen, show in toolbar message on screen
$config['markasjunk_toolbar'] = 1;

// Learn any message moved to the spam mailbox as spam (not just when the button is pressed)
$config['markasjunk_move_spam'] = true;

// Learn any message moved from the spam mailbox to the ham mailbox as ham (not just when the button is pressed)
$config['markasjunk_move_ham'] = true;

// cmd_learn Driver options
// ------------------------
// The command used to learn that a message is spam
// The command can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %i is replaced with the email address from the user's default identity
//      %xds is replaced with the X-DSPAM-Signature header
//      %f is replaced with the path to the message file
// If you do not want run the command set this to null
$config['markasjunk_spam_cmd'] = NULL;

// The command used to learn that a message is ham
// The command can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %i is replaced with the email address from the user's default identity
//      %xds is replaced with the X-DSPAM-Signature header
//      %f is replaced with the path to the message file
// If you do not want run the command set this to null
$config['markasjunk_ham_cmd'] = NULL;

// dir_learn Driver options
// ------------------------
// The full path of the directory used to store spam (must be writable by webserver)
$config['markasjunk_spam_dir'] = '{GUI_ROOT_DIR}/plugins/SpamAssassin/sa-learn';

// The full path of the directory used to store ham (must be writable by webserver)
$config['markasjunk_ham_dir'] = '{GUI_ROOT_DIR}/plugins/SpamAssassin/sa-learn';

// The filename prefix
// The filename can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %t is replaced with the type of message (spam/ham)
$config['markasjunk_filename'] = '%u__%t__';

// email_learn Driver options
// --------------------------
// The email address that spam messages will be sent to
// The address can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %i is replaced with the email address from the user's default identity
// If you do not want to send an email set this to null
$config['markasjunk_email_spam'] = NULL;

// The email address that ham messages will be sent to
// The address can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %i is replaced with the email address from the user's default identity
// If you do not want to send an email set this to null
$config['markasjunk_email_ham'] = NULL;

// Should the spam/ham message be sent as an attachment
$config['markasjunk_email_attach'] = true;

// The email subject (when sending as attachment)
// The subject can contain the following macros that will be expanded as follows:
//      %u is replaced with the username (from the session info)
//      %l is replaced with the local part of the username (if the username is an email address)
//      %d is replaced with the domain part of the username (if the username is an email address or default mail domain if not)
//      %t is replaced with the type of message (spam/ham)
$config['markasjunk_email_subject'] = 'learn this message as %t';

// sa_blacklist Driver options
// ---------------------------
// Path to SAUserPrefs config file
$config['markasjunk_sauserprefs_config'] = '../sauserprefs/config.inc.php';

// amavis_blacklist Driver options
// ---------------------------
// Path to amacube config file
$config['markasjunk_amacube_config'] = '../amacube/config.inc.php';

// edit_headers Driver options
// ---------------------------
// Patterns to match and replace headers for spam messages
// Replacement method uses preg_replace - http://www.php.net/manual/function.preg-replace.php
// WARNING: Be sure to match the entire header line, including the name of the header, also use ^ and $ and the 'm' flag
// see the README for an example
// TEST CAREFULLY BEFORE USE ON REAL MESSAGES
$config['markasjunk_spam_patterns'] = array(
    'patterns'     => array(),
    'replacements' => array()
);

// Patterns to match and replace headers for spam messages
// Replacement method uses preg_replace - http://www.php.net/manual/function.preg-replace.php
// WARNING: Be sure to match the entire header line, including the name of the header, also use ^ and $ and the 'm' flag
// see the README for an example
// TEST CAREFULLY BEFORE USE ON REAL MESSAGES
$config['markasjunk_ham_patterns'] = array(
    'patterns'     => array(),
    'replacements' => array()
);
