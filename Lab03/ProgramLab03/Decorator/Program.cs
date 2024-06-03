using System;
using static System.Net.Mime.MediaTypeNames;
using System.Threading;
using ClassLibForDecorator;

class Program
{
    static void Main(string[] args)
    {

        Hero warrior = new Warrior();
        Hero mage = new Mage();
        Hero paladin = new Paladin();

        warrior = new WeaponDecorator(warrior);
        mage = new ArmorDecorator(mage);
        paladin = new ArtifactDecorator(paladin);
        paladin = new WeaponDecorator(paladin);
        paladin = new ArmorDecorator(paladin);

        Console.WriteLine(warrior.GetDescription());
        Console.WriteLine(mage.GetDescription());
        Console.WriteLine(paladin.GetDescription());
    }
}
