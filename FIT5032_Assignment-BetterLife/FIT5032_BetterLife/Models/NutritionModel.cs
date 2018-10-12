namespace FIT5032_BetterLife.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class NutritionModel : DbContext
    {
        public NutritionModel()
            : base("name=NutritionModel")
        {
        }

        public virtual DbSet<Nutrition> Nutritions { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
        }
    }
}
