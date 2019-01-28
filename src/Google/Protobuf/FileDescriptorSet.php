<?php
/**
 * Generated from descriptor.proto by the protocol buffer compiler. DO NOT EDIT!
 */

namespace Google\Protobuf;

/**
 * FileDescriptorSet message
 */
class FileDescriptorSet extends \Allegro\Protobuf\Internal\Message
{
    /* Field index constants */
    const FILE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILE => array(
            'name' => 'file',
            'repeated' => true,
            'type' => '\Google\Protobuf\FileDescriptorProto'
        ),
    );

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'file' list
     *
     * @param \Google\Protobuf\FileDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendFile(\Google\Protobuf\FileDescriptorProto $value)
    {
        return $this->append(self::FILE, $value);
    }

    /**
     * Clears 'file' list
     *
     * @return null
     */
    public function clearFile()
    {
        return $this->clear(self::FILE);
    }

    /**
     * Returns 'file' list
     *
     * @return \Google\Protobuf\FileDescriptorProto[]
     */
    public function getFile()
    {
        return $this->get(self::FILE);
    }

    /**
     * Returns true if 'file' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFile()
    {
        return count($this->get(self::FILE)) !== 0;
    }

    /**
     * Returns 'file' iterator
     *
     * @return \ArrayIterator
     */
    public function getFileIterator()
    {
        return new \ArrayIterator($this->get(self::FILE));
    }

    /**
     * Returns element from 'file' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\FileDescriptorProto
     */
    public function getFileAt($offset)
    {
        return $this->get(self::FILE, $offset);
    }

    /**
     * Returns count of 'file' list
     *
     * @return int
     */
    public function getFileCount()
    {
        return $this->count(self::FILE);
    }
}