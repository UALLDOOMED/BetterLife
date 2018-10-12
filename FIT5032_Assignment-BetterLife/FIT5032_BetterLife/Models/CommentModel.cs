namespace FIT5032_BetterLife.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class CommentModel : DbContext
    {
        public CommentModel()
            : base("name=CommentModel")
        {
        }

        public virtual DbSet<Comment> Comments { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Comment>()
                .Property(e => e.Title)
                .IsUnicode(false);

            modelBuilder.Entity<Comment>()
                .Property(e => e.Content)
                .IsUnicode(false);

            modelBuilder.Entity<Comment>()
                .Property(e => e.UserId)
                .IsUnicode(false);

            modelBuilder.Entity<Comment>()
                .Property(e => e.UserName)
                .IsUnicode(false);
        }
    }
}
