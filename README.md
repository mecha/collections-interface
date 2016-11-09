## Collection - Interface ##

This repository contains interfaces that represent various types of collections.
These interfaces provide very granular control of what the implementing collection
must expose. Generally, they are divided into 3 "types": Collections, Sets, and Maps.


### Collections
This is a general term that encompasses all other types. Interfaces of this type
will have the word "Collection" in their names, unless they also belong to another
type. These interfaces will expose the most basic collection methods. All collections
allow checking whether an item belongs to them. Many interfaces
of other types are "composed" of these interfaces. Composition of other "types"
is necessary to avoid long, complicated interface names, and also because PHP
does not allow a way to type-hint multiple types at once, e.g. you cannot specify
that a parameter must implement both the `Countable` and `Traversable` interfaces - 
unless there is an interface that is composed of them.

- `CollectionInterface`
- `BaseCollectionInterface`
- `GrossCollectionInterface`
- `AccessibleCollectionInterface`
- `CountableCollectionInterface`
- `IterableCollectionInterface`
- `ClearableCollectionInterface`
- `ReducibleCollectionInterface`
- `ExtensibleCollectionInterface`
- `MutableCollectionInterface`
- `ReadableCollectionInterface`
- `WritableCollectionInterface`
- `TraversableCollectionInterface`
- `AbatableCollectionInterface`
- `GrowableCollectionInterface`

### Sets
Sets are collections that are unordered and contain only unique items. Sets do
not allow retrieving an element by a specific key.

### Maps
These are collections that are unordered, may contain the same item multiple times,
and allow addressing an item by key.

### Other
This is a miscellaneous type containing interfaces that are related to other
collections or are required by them, but do not fit in another category.

### Naming
This repository uses loose naming conventions to help easier identify interfaces
by their intended functionality.

#### Simple

- **Base**: Only the most basic functionality gets exposed. Usually not allowing
anything but checking. However, all other types are inclusive of this.

    * `BaseCollectionInterface`
    * `BaseSetInterface`

- **Gross**: Collections that allow retrieval of all of their items at once.
This does not include accessing individual items.

    * `GrossCollectionInterface`
    * `GrossSetInterface`

- **Accessible**: Collections that allow accessing individual items.
This does not include accessing all items at once.

    * `AccessibleCollectionInterface`

- **Countable**: Collections that allow retrieval of the total number of their elements.
This does not include accessing the elements themselves.

    * `CountableCollectionInterface`
    * `CountableSetInterface`

- **Iterable**: Collections that can be iterated over in a loop.
This does not include accessing the elements themselves.

    * `IterableCollectionInterface`
    * `IterableSetInterface`

- **Clearable**: Collections that allow clearing all of their items in one go.
This does not include removing individual elements.

    * `ClearableCollectionInterface`
    * `ClearableSetInterface`

- **Reducible**: Collections that allow removal of individual elements.
This does not include clearing all element at once.

    * `ReducibleCollectionInterface`
    * `ReducibleSetInterface`

- **Extensible**: Collections that allow items to be added to them.

    * `ExtensibleCollectionInterface`
    * `ExtensibleSetInterface`

- **Mutable**: Collections that allow setting of the bulk of the items.

    * `MutableCollectionInterface`
    * `MutableSetInterface`

#### Complex

- **Readable**: *Gross* + *Countable*, allowing retrieval of item bulk, as well as their count.

    * `ReadableCollectionInterface`
    * `ReadableSetInterface`

- **Open**: *Readable* + *Accessible**, allowing any kind of regular retrieval.

    * `OpenCollectionInterface`

- **Writable**: *Extensible* + *Reducible* + *Mutable*, allowing any kind of modification.

    * `WritableCollectionInterface`

- **Traversable**: *Readable* + *Iterable*, allowing data access normally, and via loop.

    * `TraversableCollectionInterface`

- **Exposed**: *Traversable* + *Open*, allowing any kind of retrieval.

    * `ExposedCollectionInterface`

- **Abatable**: *Countable* + *Reducible*, i.e. can be reduced _to_.

    * `AbatableCollectionInterface`

- **Growable**: *Countable* + *Extensible*, i.e. can be grown _to_.

    * `GrowableCollectionInterface`

- **Plain**: All of the above, where applicable.
These are collections that are a typical example of their type, and
usually expose all methods that are necessary for typical operation. Many times,
these are CRUD methods that allow full manipulation of a collection's item set,
but nothing extra. An example to this is the `CollectionInterface`, which in
contrast exposes nothing but what is absolutely essential for a collection, thus
allowing all collections to be "Collections", but without forcing functionality
that may be undesirable. The word "Plain" itself will not usually appear at all
in the name of interfaces of this type.

    * `CollectionInterface`



ReadableCollectionInterface -> AccessibleCollectionInterface
AccessibleCollectionInterface -> ReadableCollectionInterface


