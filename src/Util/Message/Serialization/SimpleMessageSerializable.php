<?php
/**
 * This disaster was designed by
 * @author Juan G. Rodríguez Carrión <jgrodriguezcarrion@gmail.com>
 */
declare(strict_types=1);
namespace Pccomponentes\Ddd\Util\Message\Serialization;

use Pccomponentes\Ddd\Util\Message\SimpleMessage;

interface SimpleMessageSerializable
{
    public function serialize(SimpleMessage $message);
}