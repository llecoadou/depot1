using System;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;
using System.Linq;

namespace Kal.Model
{
    public partial class Data : DbContext
    {
        public Data()
            : base("name=Data")
        {
        }

        public virtual DbSet<animal> animals { get; set; }
        public virtual DbSet<categorie> categories { get; set; }
        public virtual DbSet<commande> commandes { get; set; }
        public virtual DbSet<conseil> conseils { get; set; }
        public virtual DbSet<motcle> motcles { get; set; }
        public virtual DbSet<posseder> posseders { get; set; }
        public virtual DbSet<produit> produits { get; set; }
        public virtual DbSet<selectionner> selectionners { get; set; }
        public virtual DbSet<utilisateur> utilisateurs { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<animal>()
                .Property(e => e.NOMANIMAL)
                .IsFixedLength();

            modelBuilder.Entity<animal>()
                .Property(e => e.RACEANIMAL)
                .IsFixedLength();

            modelBuilder.Entity<animal>()
                .Property(e => e.PROPRIANIMAL)
                .IsFixedLength();

            modelBuilder.Entity<categorie>()
                .Property(e => e.LIBCAT)
                .IsFixedLength();

            modelBuilder.Entity<categorie>()
                .HasMany(e => e.produits)
                .WithRequired(e => e.categorie)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<commande>()
                .Property(e => e.DATECOM)
                .HasPrecision(0);

            modelBuilder.Entity<conseil>()
                .Property(e => e.DESCCONSEIL)
                .IsFixedLength();

            modelBuilder.Entity<conseil>()
                .HasMany(e => e.motcles)
                .WithMany(e => e.conseils)
                .Map(m => m.ToTable("rechercher", "kaldb").MapLeftKey("NUMCONSEIL").MapRightKey("NUMMOTCLE"));

            modelBuilder.Entity<motcle>()
                .Property(e => e.LIBMOTCLE)
                .IsFixedLength();

            modelBuilder.Entity<posseder>()
                .Property(e => e.REFPROD)
                .IsFixedLength();

            modelBuilder.Entity<produit>()
                .Property(e => e.REFPROD)
                .IsFixedLength();

            modelBuilder.Entity<produit>()
                .Property(e => e.LIBELLEPROD)
                .IsFixedLength();

            modelBuilder.Entity<produit>()
                .Property(e => e.DESCRIPTION)
                .IsFixedLength();

            modelBuilder.Entity<selectionner>()
                .Property(e => e.REFPROD)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.NOMCLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.PRENOMCLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.MAILCLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.PASSCLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.ADRCLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .Property(e => e.VILLECLI)
                .IsFixedLength();

            modelBuilder.Entity<utilisateur>()
                .HasMany(e => e.animals)
                .WithRequired(e => e.utilisateur)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<utilisateur>()
                .HasMany(e => e.commandes)
                .WithRequired(e => e.utilisateur)
                .WillCascadeOnDelete(false);
        }
    }
}
