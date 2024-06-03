using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForDecorator
{
    public abstract class InventoryDecorator : Hero
    {
        protected Hero hero;

        public InventoryDecorator(Hero hero)
        {
            this.hero = hero;
        }

        public override string GetDescription()
        {
            return hero.GetDescription();
        }
    }

}
