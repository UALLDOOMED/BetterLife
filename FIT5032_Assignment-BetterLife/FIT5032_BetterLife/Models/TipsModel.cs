namespace FIT5032_BetterLife.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class TipsModel : DbContext
    {
        public TipsModel()
            : base("name=TipsModel")
        {
        }

        public virtual DbSet<Tip> Tips { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
        }
    }
}
