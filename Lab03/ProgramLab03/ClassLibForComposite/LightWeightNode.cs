using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForComposite
{
    public class LightWeightNode : LightNode
    {
        private LightNode node;

        public LightWeightNode(LightNode node)
        {
            this.node = node;
        }

        public override void Display()
        {
            node.Display();
        }

        public override int GetTreeSize()
        {
            return 1;
        }
    }
}
