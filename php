PHP 7 features:
1. performance 2X FAST
2. Improved performance − Having PHPNG code merged in PHP7, it is twice as fast as PHP 5.
3. Lower Memory Consumption − Optimized PHP 7 utilizes lesser resource.
4. Scalar type declarations − Now parameter and return types can be enforced.  coiesive vs strict 
5. Consistent 64-bit support − Consistent support for 64-bit architecture machines.
6. Improved Exception hierarchy − Exception hierarchy is improved.
7. Many fatal errors converted to Exceptions − Range of exceptions is increased covering many fatal error converted as exceptions.
8. Secure random number generator − Addition of new secure random number generator API.
9. Deprecated SAPIs and extensions removed − Various old and unsupported SAPIs and extensions are removed from the latest version.
10. The null coalescing operator (??) − New null coalescing operator added.
11. Return and Scalar Type Declarations − Support for return type and parameter type added.
12. Anonymous Classes − Support for anonymous added.
13. Zero cost asserts − Support for zero cost assert added.


Non coalescing operttor  ?? vs ?: 

return type declaration declared the type of returned value (declare(strict_types=1); )

Spaceship operator return -1 0 1 : print( 1 <=> 1);print("<br/>");   print( 1 <=> 2);print("<br/>");    print( 2 <=> 1);print("<br/>");

Array constants can now be defined using the define() function
//define a array using define function
   define('animals', [
      'dog',
      'cat',
      'bird'
   ]);
   print(animals[1]);
   
 Anonymous class:
 <?php class A {
      private $x = 1;
   }

   // PHP 7+ code, Define
   $value = function() {
      return $this->x;
   };

   print($value->call(new A));
   ?>
   <?php
   // Before PHP 7
   use com\tutorialspoint\ClassA;
   use com\tutorialspoint\ClassB;
   use com\tutorialspoint\ClassC as C;

   use function com\tutorialspoint\fn_a;
   use function com\tutorialspoint\fn_b;
   use function com\tutorialspoint\fn_c;

   use const com\tutorialspoint\ConstA;
   use const com\tutorialspoint\ConstB;
   use const com\tutorialspoint\ConstC;

   // PHP 7+ code
   use com\tutorialspoint\{ClassA, ClassB, ClassC as C};
   use function com\tutorialspoint\{fn_a, fn_b, fn_c};
   use const com\tutorialspoint\{ConstA, ConstB, ConstC};

?>
   
