using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DiyaClassLib
{
    public interface IDocWithTimeUntil
    {
         DateTime DateOfIssue { get;  }
         DateTime DateOfExpiry { get;  }

        public bool rewriteDateOfExpiry(DateTime dateOfExpiry);
    }
}
