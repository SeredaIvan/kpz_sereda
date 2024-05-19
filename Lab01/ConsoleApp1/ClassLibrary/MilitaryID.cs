using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DiyaClassLib
{
    public class MilitaryID : Document , IDocWithTimeUntil
    {
        private bool worthy;
        private string rank;
        private string unit;
        private DateTime dateOfIssue;
        private DateTime dateOfExpiry;

        public bool Worthy { get { return worthy; } set { worthy = value; } }
        public string Rank { get { return rank; } set { rank = value; } }
        public string Unit { get { return unit; } set { unit = value; } }
        public DateTime DateOfIssue { get { return dateOfIssue; } set { dateOfIssue = value; } }
        public DateTime DateOfExpiry { get { return dateOfExpiry; } set { dateOfExpiry = value; } }

        public MilitaryID(string name, string surname, bool worthy, string rank, string unit, DateTime dateOfIssue, DateTime dateOfExpiry)
            : base("Військовий квиток", name, surname)
        {
            this.worthy = worthy;
            this.rank = rank;
            this.unit = unit;
            this.dateOfIssue = dateOfIssue;
            this.dateOfExpiry = dateOfExpiry;
        }

        public bool rewriteDateOfExpiry(DateTime newDateOfExpiry)
        {
            if (newDateOfExpiry > DateOfExpiry)
            {
                dateOfExpiry = newDateOfExpiry;
                return true;
            }
            return false;
        }
    }
}
