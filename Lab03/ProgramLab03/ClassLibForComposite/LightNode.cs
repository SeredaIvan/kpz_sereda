using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForComposite
{
    public abstract class LightNode
    {
        public abstract void Display();
        public virtual void AddChild(LightNode childNode)
        {
            throw new NotImplementedException("AddChild method is not implemented in the base class.");
        }
        public virtual int GetTreeSize()
        {
            return 1;
        }
    }
}
