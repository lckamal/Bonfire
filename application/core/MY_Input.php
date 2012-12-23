<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2012, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @filesource
 */
// ------------------------------------------------------------------------

class MY_Input extends CI_Input
{
	/**
	 * Test for a specific POST parameter
	 *
	 * This is used to test for a specific submit button.
	 * Bonfire uses this idiom everywhere.
	 *
	 *
	 * The native CodeIgniter idiom would be to rely on
	 * form_validation->run(), which automatically tests
	 * for empty POST data.  If you tried refactoring
	 * Bonfire to do so, you might notice a loss of clarity
	 * when dealing with
	 *
	 *  - create() and edit() methods which call a common
	 *    save() method
	 *  - forms with many fields
	 *
	 * Bonfire also uses forms with multiple submit buttons,
	 * and provides templates (in the modulebuilder) for
	 * developers to write such forms themselves.  An obvious
	 * example is a blog: you want to be able to review the
	 * blog post, and then perform an action such as
	 * [un]publishing it.
	 *
	 *
	 * This method can handle `<button type="submit" name="do_XYZ">`
	 * without needing a non-empty value attribute.
	 *
	 * It's equivalent to `->post($key) !== false` -
	 * which would be fine for the computer, but less so for new
	 * developers.  It would be too likely to get copied and/or
	 * shortened (i.e. removing the strict comparison), especially
	 * in the template code generated by modulebuilder.
	 *
	 *
	 * @param string $index to test
	 * @return bool
	 */
    public function post_key_exists($index)
	{
		return isset($_POST[$index]);
	}
}

/* End of file MY_Input.php */
/* Location: ./application/core/MY_Input.php */