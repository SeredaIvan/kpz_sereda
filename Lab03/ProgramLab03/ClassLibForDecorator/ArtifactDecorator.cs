using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForDecorator
{
    public class ArtifactDecorator : InventoryDecorator
    {
        public ArtifactDecorator(Hero hero) : base(hero) { }

        public override string GetDescription()
        {
            return $"{hero.GetDescription()} with Artifact";
        }
    }
}

