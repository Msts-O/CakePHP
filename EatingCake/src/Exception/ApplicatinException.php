
<?php
  declare(strict_types=1);

  namespace App\Exception ;

  use Cake\Core\Exception\Exception ;

  class ApplicatinException extends Exception

   {
      /**
       * @var int
       */
      protected $_defaultCode = 500;
   }
