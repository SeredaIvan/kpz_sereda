using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForDecorator
{
    public class WeaponDecorator : InventoryDecorator
    {
        public WeaponDecorator(Hero hero) : base(hero) { }

        public override string GetDescription()
        {
            return $"{hero.GetDescription()} with Weapon";
        }
    }

    
}
