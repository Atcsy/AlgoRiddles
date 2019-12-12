/* Make the following join query with filter, map amd reduce.

SELECT characters.name, SUM( inventory.value ) AS totalValue
FROM characters, inventory
WHERE characters.id = invetory.owner
GROUP BY characters.name
*/

const inventory = [
  {
    id: 1,
    owner: 1,
    name: 'Sword',
    weight: 10,
    value: 100
  },
  {
    id: 2,
    owner: 1,
    name: 'Shield',
    weight: 10,
    value: 100
  },
  {
    id: 3,
    owner: 2,
    name: 'Sword',
    weight: 10,
    value: 100
  }
];

const characters = [
  {
    id: 1,
    name: 'Steve',
    points: 500,
    level: 5,
  },
  {
    id: 2,
    name: 'Ron',
    points: 200,
    level: 2,
  },
  {
    id: 3,
    name: 'Jack',
    points: 0,
    level: 1,
  }
]

characters.map( c => {
  let items = inventory.filter( item => item.owner === c.id );

  return {
    name: c.name,
    itemCount: items.length
  }
})
