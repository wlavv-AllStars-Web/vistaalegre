<?php

declare(strict_types=1);

/*
 * This file is part of the humbug/php-scoper package.
 *
 * Copyright (c) 2017 Théo FIDRY <theo.fidry@gmail.com>,
 *                    Pádraic Brady <padraic.brady@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'meta' => [
        'title' => 'Self, static and parent keywords on constants',
        // Default values. If not specified will be the one used
        'prefix' => 'Humbug',
        'whitelist' => [],
        'whitelist-global-constants' => true,
        'whitelist-global-classes' => false,
        'whitelist-global-functions' => true,
        'registered-classes' => [],
        'registered-functions' => [],
    ],

    'Usage for classes in the global scope' => <<<'PHP'
<?php

class A {
    protected const FOO = 'FOO';
    
    private $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public static function test() {
        self::FOO;
        static::FOO;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}

class B extends A {
    const FOO = 'BAR';
    
    public function __construct(string $name) {
        parent::__construct($name);
        
        parent::FOO;
    }
}

B::test();
echo (new B('yo'))->getName().PHP_EOL;

----
<?php

namespace Humbug;

class A
{
    protected const FOO = 'FOO';
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public static function test()
    {
        self::FOO;
        static::FOO;
    }
    public function getName() : string
    {
        return $this->name;
    }
}
class B extends \Humbug\A
{
    const FOO = 'BAR';
    public function __construct(string $name)
    {
        parent::__construct($name);
        parent::FOO;
    }
}
\Humbug\B::test();
echo (new \Humbug\B('yo'))->getName() . \PHP_EOL;

PHP
    ,

    'Usage for classes in a namespaced' => <<<'PHP'
<?php

namespace Foo {
    class A {
        protected const FOO = 'FOO';
        
        private $name;
        
        public function __construct(string $name) {
            $this->name = $name;
        }
        
        public static function test() {
            self::FOO;
            static::FOO;
        }
        
        public function getName(): string
        {
            return $this->name;
        }
    }
        
    class B extends A {
        const FOO = 'BAR';
        
        public function __construct(string $name) {
            parent::__construct($name);
            
            parent::FOO;
        }
    }
}

namespace {
    use Foo\B;

    B::test();
    echo (new B('yo'))->getName().PHP_EOL;
}

----
<?php

namespace Humbug\Foo;

class A
{
    protected const FOO = 'FOO';
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public static function test()
    {
        self::FOO;
        static::FOO;
    }
    public function getName() : string
    {
        return $this->name;
    }
}
class B extends \Humbug\Foo\A
{
    const FOO = 'BAR';
    public function __construct(string $name)
    {
        parent::__construct($name);
        parent::FOO;
    }
}
namespace Humbug;

use Humbug\Foo\B;
\Humbug\Foo\B::test();
echo (new \Humbug\Foo\B('yo'))->getName() . \PHP_EOL;

PHP
    ,
];
