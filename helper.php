<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModHelloWorldHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        // return 
        // $language = $params->get('lang', '1');
        // $hello    = modHelloWorldHelper::getHello( $language );
        // // Obtain a database connection.
        // $db = JFactory::getDbo();
        // // Retrieve the shout. Note that we are now retrieving the id not the lang field.
        // $query = $db->getQuery(true)
        //             ->select($db->quoteName('hello'))
        //             ->from($db->quoteName('#__helloworld'))
        //             ->where('id = '. $db->Quote($params));
        // // Prepare the query
        // $db->setQuery($query);
        // // Load the row.
        // $result = $db->loadResult();
        // // Return the Hello.
        // return $result;
        
          
        // Obtain a database connection.
        $db = JFactory::getDbo();
      
        $query = $db->getQuery(true)
                ->select('*')
                ->from($db->quoteName('#__modules'))
                ->where('module = '. $db->Quote('mod_helloworld'));
                //->where('id = '. $db->Quote(90));
                
                $db->setQuery($query);
                while($i = $db->loadNextObject())
                    {
                        /*echo "<pre>";
                        print_r($i);
                        echo "</pre>";*/
                    
                    
                     $json_data = $i->params;
                     $decode_data = json_decode($json_data);
                    $url.= $decode_data->sandbox_url;
                    $merchant_id.= $decode_data->merchant_id;
                    $merchant_key.= $decode_data->merchant_key;
                    }
        
        
        
        ?>
         <form action="<?php echo $url; ?>" method="post">
            <input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>">
            <input type="hidden" name="merchant_key" value="<?php echo $merchant_key; ?>">
            <label>Enter First Name: 
                <input type="text" name="name_first" class="cust-input">
            </label>
            <label>Enter Last Name:
                <input type="text" name="name_last"  class="cust-input">
            </label>
            <label>Enter Email:
                <input type="email" name="email_address"  class="cust-input" required>
            </label>
            <label>Enter Item Name:
                <input type="text" name="item_name"  class="cust-input" required>
            </label>
            <label>Enter Amount:
                <input type="text" name="amount"  class="cust-input" required>
            </label>
            <input type="submit" value="Pay Now" class="cust-btn">
        </form> 
        
        <style>
            
            input.cust-input {
                width: 100%;
                height: 5vh;
                border: 1px solid #555;
            }
            input.cust-btn {
                background-color: #e0182d;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            input.cust-btn:hover {
                  background-color: #dc3545;
                }
        </style>
        
  <?php   }
}






