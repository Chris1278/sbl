<?php
/**
*
* @package phpBB Extension - Markeneintragung des Minipomforums
* @copyright (c) 2017 (Minipomforum.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace chris1278\sbl\migrations;

class sbl_1_0_0 extends \phpbb\db\migration\migration
{
   public function effectively_installed()
   {
      return;
   }

   static public function depends_on()
   {
      return array('\phpbb\db\migration\data\v310\dev');
   }

   public function update_schema()
   {
      return array(
      );
   }

   public function revert_schema()
   {
      return array(
      );
   }

   public function update_data()
   {
      return array(
         // Current version
         array('config.add', array('sbl_version', '1.0.0')),
      );
   }
}